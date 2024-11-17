<?php

namespace App\Http\Controllers;

use App\Models\DataAlumni;
use Illuminate\Http\Request;

class ForecastingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('other.forecasting');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Convert Nilai Pemograman 
        $nilai_alpro = $this->converter($request->alpro);
        $nilai_asd = $this->converter($request->asd);
        $nilai_pbo = $this->converter($request->pbo);
        $nilai_pw = $this->converter($request->pw);
        $nilai_pf = $this->converter($request->pf);
        $nilai_pab = $this->converter($request->pab);

        $means_pemograman = ($nilai_alpro + $nilai_asd + $nilai_pbo + $nilai_pw + $nilai_pf + $nilai_pab) / 6;
        $pemograman = $this->grade($means_pemograman);

        // Convert Nilai Pengolahan Data
        $nilai_pbd = $this->converter($request->pbd);
        $nilai_datmin = $this->converter($request->datmin);
        $nilai_dwh = $this->converter($request->dwh);

        $means_pengolahanData = ($nilai_pbd + $nilai_datmin + $nilai_dwh) / 3;
        $pengolahanData = $this->grade($means_pengolahanData);

        // Convert Nilai Sistem Informasi 
        $nilai_se = $this->converter($request->se);
        $nilai_sig = $this->converter($request->sig);
        $nilai_sil = $this->converter($request->sil);
        $nilai_manpro = $this->converter($request->manpro);
        $nilai_ae = $this->converter($request->ae);
        $nilai_psi = $this->converter($request->psi);

        $means_si = ($nilai_se + $nilai_sig + $nilai_sil + $nilai_manpro + $nilai_ae + $nilai_psi) / 6;
        $sistemInformasi = $this->grade($means_si);

        // Convert Nilai TManjemen SI
        $nilai_tatkel = $this->converter($request->tatkel);
        $nilai_manlay = $this->converter($request->manlay);
        $nilai_manris = $this->converter($request->manris);
        $nilai_peti = $this->converter($request->peti);
        $nilai_mpb = $this->converter($request->mpb);
        $nilai_manpel = $this->converter($request->manpel);

        $means_mansi = ($nilai_mpb + $nilai_tatkel + $nilai_manlay + $nilai_manris + $nilai_peti+ $nilai_manpel) / 6;
        $manajemen = $this->grade($means_mansi);

        // Convert Nilai Rekayasan perancangan
        $nilai_apsi = $this->converter($request->apsi);
        $nilai_pi = $this->converter($request->pi);
        $nilai_rpl = $this->converter($request->rpl);

        $means_rekayasa = ($nilai_apsi + $nilai_pi + $nilai_rpl) / 3;
        $rekayasaPerancangan = $this->grade($means_rekayasa);

        //Forecasting Data 
        $rekomendasi_pekerjaan = DataAlumni::where('Mata Kuliah Pemograman', $pemograman)
            ->where('Mata Kuliah Manajemen SI/IT', $manajemen)
            ->where('Mata Kuliah Data dan Informasi', $pengolahanData)
            ->where('Mata Kuliah Sistem Informasi', $sistemInformasi)
            ->where('Mata Kuliah Rekayasa dan Perancangan Sistem Informasi', $rekayasaPerancangan)
            ->pluck('pekerjaan')
            ->first();


        // Tampilkan hasil rekomendasi ke view
        return view('other.showPredict', [
            'rekomendasi_pekerjaan' => $rekomendasi_pekerjaan, 
            'nilai_MKP'=> $pemograman,
            'nilai_MKM'=> $manajemen,
            'nilai_MKMSI'=> $sistemInformasi,
            'nilai_MKRPSI'=> $rekayasaPerancangan,
            'nilai_MKPDI'=> $pengolahanData,
        ]);
    }

        private function converter($value){
        if ($value === 'A') {
            return 5;
        } elseif ($value === 'AB') {
            return 4;
        } elseif ($value === 'B') {
            return 3;
        } elseif ($value === 'BC') {
            return 2;
        } elseif ($value === 'C') {
            return 1;
        } else {
            return 0;
        }
    }

    private function grade($rata_rata)
    {
        // Ganti angka menjadi huruf sesuai dengan kisaran skala nilai Anda
        if ($rata_rata >= 4.1 && $rata_rata <= 5) {
            return 'A';
        } elseif ($rata_rata >= 3.1 && $rata_rata <= 4) {
            return 'AB';
        } elseif ($rata_rata >= 2.1 && $rata_rata <= 3) {
            return 'B';
        } elseif ($rata_rata >= 1.6 && $rata_rata <= 2) {
            return 'BC';
        } elseif ($rata_rata >= 1 && $rata_rata <= 1.5) {
            return 'C';
        } else {
            return 'Tidak Valid';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
