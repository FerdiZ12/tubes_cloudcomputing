@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Forecasting</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Prediksi Pekerjaan Menggunakan Nilai</h2>
            <p class="section-lead">Form Input Nilai Mahasiswa</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Nilai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('forecasting.store') }}" method="POST">
                        @csrf
                        <div class="section-title">Mata Kuliah Pemograman</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Algoritma Pemograman</label>
                                    <select class="form-control" name="alpro" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Algoritma Sturktur Data</label>
                                    <select class="form-control" name="asd" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Pemograman Berbasis Objek</label>
                                    <select class="form-control" name="pbo" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Pemogramman Web</label>
                                    <select class="form-control" name="pw" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Pemograman Framework</label>
                                    <select class="form-control" name="pf" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Perancangan Aplikasi Bergerak</label>
                                    <select class="form-control" name="pab" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">Mata Kuliah Pengelolaan Data dan Informasi</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Perancangan Basis Data</label>
                                    <select class="form-control" name="pbd" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Data Mining</label>
                                    <select class="form-control" name="datmin" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Data warehouse & Business Intelejen </label>
                                    <select class="form-control" name="dwh" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">Mata Kuliah Sistem Informasi</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Sistem Enterprise </label>
                                    <select class="form-control" name="se" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Sistem Informasi Geografis</label>
                                    <select class="form-control" name="sig" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Sistem Informasi Logistik </label>
                                    <select class="form-control" name="sil" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Manajemen Proyek Sistem Informasi </label>
                                    <select class="form-control" name="manpro" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Arsitektur Enterprise</label>
                                    <select class="form-control" name="ae" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Pengenalan Sistem Informasi </label>
                                    <select class="form-control" name="psi" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="section-title">Mata Kuliah Manajemen SI/IT</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Tata Kelola SI/IT </label>
                                    <select class="form-control" name="tatkel" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Manajemen Layanan SI/IT </label>
                                    <select class="form-control" name="manlay" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Manajemen Resiko SI/IT </label>
                                    <select class="form-control" name="manris" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Pemantauan dan Evaluasi SI/IT </label>
                                    <select class="form-control" name="peti" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Manajemen Proses Bisnis </label>
                                    <select class="form-control" name="mpb" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Manajemen Pelanggan </label>
                                    <select class="form-control" name="manpel" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="section-title">Mata Kuliah Rekayasa Perancangan Sistem Informasi</div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label> Analisis Perancangan Sistem Informasi</label>
                                    <select class="form-control" name="apsi" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Perancangan Interaksi</label>
                                    <select class="form-control" name="pi" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>RPL : Capstone Project </label>
                                    <select class="form-control" name="rpl" required>
                                        <option>A</option>
                                        <option>AB</option>
                                        <option>B</option>
                                        <option>BC</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        {{-- Button --}}
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-icon btn-success" title="Simpan">Prediksi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
