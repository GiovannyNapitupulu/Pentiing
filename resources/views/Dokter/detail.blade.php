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
                                src="https://ui-avatars.com/api/?background=4CB4EB&name={{ $question->user->name }}"
                                alt="" style="width: 60px;height:60px">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p class="card-subtitle text-primary">{{ $question->name }} </p>
                                    <small class="text-muted">{{ $question->user->role }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="card-text mt-5">{{ $question->description }}</p>
                        </div>
                        <div class="col-2 mt-5">
                        </div>
                    </div>
                </div>
                <form action="{{ route('jawaban.action') }}" class="mt-2" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="hidden" name="consultation_id" value="{{ $question->id }}">
                        <textarea class="form-control" placeholder="Jawaban" name="body" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Jawaban</label>
                    </div>
                    <button class="btn btn-primary mt-3 mb-2" href="">submit</button>
                </form>
            </div>
            <h4 class="mt-3">Balasan</h4>
            @foreach ($question->jawaban as $item)
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
                                        <p class="card-subtitle text-primary">{{ $item->user->name }} </p>
                                        <small class="text-muted">{{ $item->user->role }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mt-5">{{ $item->body }}</p>
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
