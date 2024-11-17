@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Lowongan Pekerjaan</h1>
        </div>
        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('news') }}" class="btn btn-danger btn-icon mr-2"><i class="fas fa-arrow-left"></i></a>
                    <h4>Detail Lowongan</h4>
                </div>
                <div class="card-body">
                    <!-- Tampilkan detail lowongan pekerjaan seperti sebelumnya -->
                    <div class="hero bg-primary text-white">
                        <h4>Perusahaan : {{ $dataLoker->nama_perusahaan }}</h4>
                        <p>{{ $dataLoker->lowongan_dicari }}</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="section-title">Jadwal</div>
                            <h6 class="my-4"> Pembukaan : {{ $dataLoker->tanggal_pembukaan }}</h6>
                            <h6 class="mb-4">Penutupan : {{ $dataLoker->tanggal_penutupan }}</h6>
                        </div>

                        <div class="col-6">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            @if ($dataLoker->berkas_persyaratan)
                                <a href="{{ Storage::url($dataLoker->berkas_persyaratan) }}"
                                    class="btn btn-primary btn-lg mt-2">Unduh Berkas
                                    Persyaratan</a>
                            @else
                                <p>Berkas persyaratan tidak tersedia.</p>
                            @endif
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 mt-2">
                            <div class="section-title">Pendaftar</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Nama Pendaftar</th>
                                        <th>Email</th>
                                    </tr>
                                    @foreach ($daftarLoker as $index => $data)
                                        <tr>
                                            <th>{{ $data->user->name }}</th>
                                            <th>{{ $data->user->email }}</th>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </section>
@endsection
