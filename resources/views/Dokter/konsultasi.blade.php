@extends('layout.dokter')
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
            @for ($i = 0; $i < 10; $i++)
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
                                        <a
                                            href="{{ route('dokter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          .detail') }}">
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, illum.
                                            </h6>
                                        </a>
                                        <small class="card-subtitle text-muted">oleh: </small> <br>
                                        <small class="text-primary">dijawab oleh: </small>
                                    </div>
                                    <div class="col-3">
                                        <small>2 menit yang lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                </div>
            @endfor
        </div>
        <div class="col-4">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
            <img src="https://tpc.googlesyndication.com/simgad/6895236797989058468" alt="">
        </div>
    </div>
@endsection
