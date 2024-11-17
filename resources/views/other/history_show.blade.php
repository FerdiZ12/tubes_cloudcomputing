@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Alumni</h1>
        </div>
        <div class="section-body">
            <div class="card author-box card-primary">
                <div class="card-body">
                    <div class="author-box-left">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                    </div>
                    <div class="author-box-details">
                        <div class="author-box-name">
                            <h3>{{ $dataAlumni->user->name }}</h3>
                        </div>

                        <div class="author-box-job">
                            {{ $dataAlumni->pekerjaan }}
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-md mt-3">
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
                                    <td>{{ $dataAlumni['Mata Kuliah Pemograman'] }}</td>
                                    <td>{{ $dataAlumni['Mata Kuliah Manajemen SI/IT'] }}</td>
                                    <td>{{ $dataAlumni['Mata Kuliah Data dan Informasi'] }}</td>
                                    <td>{{ $dataAlumni['Mata Kuliah Sistem Informasi'] }}</td>
                                    <td>{{ $dataAlumni['Mata Kuliah Rekayasa dan Perancangan Sistem Informasi'] }}</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="float-right mt-sm-0 mt-3">
                        <a href="{{ route('history') }}" class="btn btn-danger">
                            << Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
