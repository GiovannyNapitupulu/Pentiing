@extends('layout/main')
@section('title')
    Pentiing | Contact
@endsection
@section('content')
    <div>


        <!-- Page Header Start -->
        <div class="container-fluid bg-dark p-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Kontak Kami</h1>
                    <a href="">Beranda</a>
                    <i class="far fa-square text-primary px-2"></i>
                    <a href="">Kontak</a>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-fluid bg-secondary px-0">
            <div class="row g-0">
                <div class="col-lg-6 py-6 px-5">
                    @if (session('contact'))
                        <p class="alert alert-success">{{ session('contact') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-dismissible alert-danger" role="alert">{{ $err }} <button
                                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </p>
                        @endforeach
                    @endif
                    <h1 class="display-5 mb-4">Kontak Kami Terkait Apapun</h1>
                    <form action="{{ route('faq.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="form-floating-1"
                                        placeholder="John Doe">
                                    <label for="form-floating-1">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="form-floating-2"
                                        placeholder="name@example.com">
                                    <label for="form-floating-2">E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="form-floating-3"
                                        placeholder="Subject">
                                    <label for="form-floating-3">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Message" id="form-floating-4" style="height: 150px"></textarea>
                                    <label for="form-floating-4">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    @endsection
