@if (Auth::user()->role == 'dokter')
@extends('layout.dokter')

    
@else
@extends('layout.main')   

@endif
<!-- Title-->
@section('title')
    Pentiing | List Konsultasi
@endsection

<!-- Content dalam container-->
@section('content2')
    <div class="row mt-3">

        <div class="col">
            <h3>List Konsultasi</h3>

            <!-- Menuju halaman cari berdasarkan topik-->
            <a href="" class="btn btn-primary mt-3 p-2">Cari Pertanyaan Berdasarkan Topik</a>

            <h4 class="mt-4 mb-4">Konsultasi kesehatan Terbaru</h4>

            <!-- Get Setiap Pertanyaan konsultasi-->
            @foreach ($consultation as $item)
                <div class="card border-0 border-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img class="rounded-circle"
                                    src="https://ui-avatars.com/api/?background=4CB4EB&name={{ $item->user->name }}"
                                    alt="" style="width: 60px;height:60px">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-title">
                                            {{ $item->question }}
                                        </h6>
                                        <small class="card-subtitle text-muted">oleh: {{ $item->name }} </small> <br>
                                        <small class="text-primary">dijawab oleh: </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="card-text mt-3">{{ $item->description }}</p>
                            </div>
                            <div class="col-2 mt-2">
                                <a class="" href="{{ route('question.detail', ['id' => $item->id]) }}">detail>></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-4">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
        </div>
    </div>
@endsection
