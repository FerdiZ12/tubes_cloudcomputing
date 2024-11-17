@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Hasil Prediksi</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Hasil Prediksi</h4>
                </div>
                <div class="card-body">
                    <table class="table mb-5">
                        <thead>
                            <tr>
                                <th scope="col">MK Pemograman</th>
                                <th scope="col">MK Sistem Informasi</th>
                                <th scope="col">MK Manajemen Sistem Informasi</th>
                                <th scope="col">MK Pengelolaan Data dan Informasi</th>
                                <th scope="col">MK Rekayasa dan Perancangan Sistem Informasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $nilai_MKP }}</td>
                            <td>{{ $nilai_MKMSI }}</td>
                            <td>{{ $nilai_MKM }}</td>
                            <td>{{ $nilai_MKPDI }}</td>
                            <td>{{ $nilai_MKRPSI }}</td>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            @if (isset($rekomendasi_pekerjaan))
                                <h4>Rekomendasi Pekerjaan: {{ $rekomendasi_pekerjaan }}</h4>
                            @else
                                <h4>Masih Belum ada data yang pas untuk direkomendasikan</h4>
                            @endif
                            <br>
                            <p>Semangat terus dan kejar impian!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
