@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Informasi Loker</h1>
        </div>
        <div class="section-body">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Lowongan Kerja</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Tanggal pembukaan</th>
                                    <th>Tanggal penutupan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($loker as $index => $data)
                                    <tr>
                                        <td>{{ $data->nama_perusahaan }}</td>
                                        <td>{{ $data->lowongan_dicari }}</td>
                                        <td>{{ $data->tanggal_pembukaan }}</td>
                                        <td>{{ $data->tanggal_penutupan }}</td>
                                        <td>
                                            <div
                                                class="badge {{ $data->status_lowongan === 'ditutup' ? 'badge-danger' : 'badge-success' }}">
                                                {{ $data->status_lowongan }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('news.show', $data->id) }}" class="btn btn-info mr-2"><i
                                                        class="fas fa-info"></i></a>

                                                @if (Auth::user()->role_id == '2')
                                                    <form action="{{ route('loker.daftar', ['id' => $data->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-icon btn-primary"
                                                            title="Daftar">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </form>
                                                @endif

                                                @if (Auth::user()->role_id == '1')
                                                    <a href="{{ route('news.edit', $data->id) }}"
                                                        class="btn btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('news.delete', ['id' => $data->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-danger"
                                                            title="Hapus">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
