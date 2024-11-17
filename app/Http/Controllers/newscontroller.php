<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Loker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loker = Loker::with('user')->get();
        return view('other.news', compact('loker'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loker');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string',
            'lowongan_kerja' => 'required|string',
            'berkas_persyaratan' => 'required|max:16384',
            'tanggal_pembukaan' => 'required|date',
            'tanggal_penutupan' => 'required|date|after_or_equal:tanggal_pembukaan',
        ]);

        if ($request->hasFile('berkas_persyaratan')) {
            $file = $request->file('berkas_persyaratan');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/berkas', $fileName);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan atau belum diupload.');
        }

        $loker = Loker::create([
            'user_id' => auth()->user()->id,
            'nama_perusahaan' => $request->nama_perusahaan,
            'lowongan_dicari' => $request->lowongan_kerja,
            'berkas_persyaratan' => $path,
            'tanggal_pembukaan' => $request->tanggal_pembukaan,
            'tanggal_penutupan' => $request->tanggal_penutupan,
        ]);

        if ($loker->tanggal_penutupan < now()) {
            $loker->update(['status_lowongan' => 'ditutup']);
        }

        $tanggalPenutupan = Carbon::parse($loker->tanggal_penutupan);

        $deletedDate = $tanggalPenutupan->addDay();
        if ($deletedDate < now()) {
            $loker->delete(); // Hapus data secara logika
        }

        return redirect()->route('loker')->with('success', 'Data lowongan pekerjaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataLoker = Loker::with('user')->find($id);

        if (!$dataLoker) {
            abort(404);
        }

        $daftarLoker = Daftar::where('loker_id', $id)->get();

        return view('other.news_show', compact('dataLoker','daftarLoker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataLoker = Loker::with('user')->find($id);

        if (!$dataLoker) {
            abort(404);
        }

        return view('admin.news_update', compact('dataLoker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataLoker = Loker::with('user')->find($id);

        if (!$dataLoker) {
            abort(404);
        }

        $request->validate([
            'nama_perusahaan' => 'required|string',
            'lowongan_kerja' => 'required|string',
            'berkas_persyaratan' => 'required|max:16384',
            'tanggal_pembukaan' => 'required|date',
            'tanggal_penutupan' => 'required|date|after_or_equal:tanggal_pembukaan',
        ]);

        $dataLoker->update($request->except('berkas_persyaratan'));

        // Update berkas persyaratan jika ada yang di-upload
        if ($request->hasFile('berkas_persyaratan')) {
            $file = $request->file('berkas_persyaratan');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/berkas', $fileName);

            // Hapus berkas lama (jika ada)
            if ($dataLoker->berkas_persyaratan) {
                Storage::delete('public/' . $dataLoker->berkas_persyaratan);
            }

            // Simpan nama berkas persyaratan yang baru
            $dataLoker->berkas_persyaratan = 'berkas/' . $fileName;
        }

        // Simpan perubahan
        $dataLoker->save();
        return redirect()->route('news')->with('success', 'Data lowongan pekerjaan berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loker = Loker::findOrFail($id);
        $user = auth()->user();


        if ($user->role->role === 'alumni' || $loker->user_id === $user->id) {

            Storage::delete('public/' . $loker->berkas_persyaratan);


            $loker->delete();

            return redirect()->route('news')->with('success', 'Data lowongan pekerjaan berhasil dihapus.');
        } else {
            return redirect()->route('news')->with('error', 'Anda tidak memiliki izin untuk menghapus lowongan pekerjaan.');
        }
    }



    public function daftar(Loker $id ,Request $request)
    {
    $user = auth()->user();

        $isRegistered = Daftar::where('user_id', $user->id)
            ->where('loker_id', $id->id)
            ->exists();

        if ($isRegistered) {
            return redirect()->route('news')->with('error', 'Anda sudah terdaftar pada lowongan pekerjaan ini.');
        }

        Daftar::create([
            'user_id' => $user->id,
            'loker_id' => $id->id,
        ]);

        return redirect()->route('news')->with('success', 'Berhasil mendaftar pada lowongan pekerjaan.');
    }
}