@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pendataan Loker</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Informasi loker untuk para mahasiswa</h2>
            <p class="section-lead">Form Input Lowongan Kerja</p>
            <div class="card">
                <div class="card-header">
                    <h4>Lowongan Kerja</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control" name='nama_perusahaan' required>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Lowongan yang dicari</label>
                                    <select class="form-control" name="lowongan_kerja" required>
                                        <option>Data Analyst</option>
                                        <option>Programmer</option>
                                        <option>IT Consultant</option>
                                        <option>ERP Consultant</option>
                                        <option>Manager Project</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Berkas Persyaratan</label>
                                    <input type="file" class="form-control" name='berkas_persyaratan' required>
                                    <small id="file" class="form-text text-muted">File PDF max-upload 16mb</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tanggal Pembukaan</label>
                                        <input type="date" class="form-control datemask  datepicker"
                                            name='tanggal_pembukaan'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tanggal Penutupan</label>
                                        <input type="date" class="form-control datemask  datepicker"
                                            name='tanggal_penutupan'>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn btn-icon btn-success" title="Simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
