@extends('layout.dokter')
<!-- Title-->
@section('title')
    Pentiing | List Konsultasi
@endsection

<!-- Content dalam container-->
@section('content2')
    <div class="row mt-3">

        <div class="col">
            <h3>Detail Konsultasi</h3>

            <!-- Kembali-->
            <a href="{{ url()->previous() }}" class="">Kembali</a>

            <h4 class="mt-4 mb-4"> {{ $question->question }}</h4>

            <!-- Get Setiap Pertanyaan konsultasi-->
            <div class="card border-0 border-bottom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img class="rounded-circle"
                                src="https://ui-avatars.com/api/?background=4CB4EB&name={{ Auth()->user()->name }}"
                                alt="" style="width: 60px;height:60px">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p class="card-subtitle text-primary">{{ $question->name }} </p>
                                    <small class="text-muted">anggota</small>
                                </div>
                                <div class="col-3">
                                    <small>2 menit yang lalu</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="card-text mt-5">{{ $question->description }}</p>
                        </div>
                        <div class="col-2 mt-5">
                            <a class="" href="">Jawab</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
        </div>
    </div>
@endsection
