@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>History</h1>
        </div>
        <div class="section-body">

            @foreach ($dataAlumnis as $index => $data)
                <div class="card author-box card-primary">
                    <div class="card-body">
                        <div class="author-box-left">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                class="rounded-circle author-box-picture">
                        </div>
                        <div class="author-box-details">
                            <div class="author-box-name">
                                <h2>{{ $data->user->name }}</h2>
                            </div>
                            <div class="author-box-job">
                                {{ $data->pekerjaan }}
                            </div>
                            <div class="author-box-job">
                                {{ $data->user->email }}
                            </div>

                        </div>

                        <div class="float-right mt-sm-0 mt-3">
                            <a href="{{ route('history.show', $data->id) }}" class="btn btn-info">Detail >></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
