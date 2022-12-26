@extends('Layout.main')
@section('title')
    Pentiing | Service
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Services</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Tawaran Kami</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">BeMarried</h3>
                    <p class="mb-0">Pentiing akan membimbing dan mengarahkan apa saja yang akan diperlukan sebelum
                        pernikahan, baik mental maupun fisik.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-venus-mars fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Married</h3>
                    <p class="mb-0">Bagaimana menjadi seorang pasangan yang saling mengerti dan melengkapi. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-baby fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Baby</h3>
                    <p class="mb-0">Masa emas buah hati berada pada umur dari lahir hingga dua tahun. Jangan sia siakan,
                        dan pastikan berikan yang terbaik bagi si kecil. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-child fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Toodler</h3>
                    <p class="mb-0">
                        Bangun karakter anak anda sejak dini. Menjadi orang tua yang memahami dan menjadi sahabat bagi anak
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-user fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Teen</h3>
                    <p class="mb-0">
                        Masa pertumbuhan anak yang menjadi perhatian orang tua dan bimbingan orang tua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-coins fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Finansial</h3>
                    <p class="mb-0">
                        Bangun Finansial yang baik dan mengarah ke masa depan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Request A Free Quote</h1>
                @if (session('service'))
                    <p class="alert alert-success">{{ session('service') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-dismissible alert-danger" role="alert">{{ $err }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </p>
                    @endforeach
                @endif
                <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et dolor diam
                    tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea at lorem sed et, lorem
                    et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam ipsum dolore stet stet elitr ut. Ipsum
                    amet labore lorem lorem diam magna sea, eos sed dolore elitr.</p>
                <form action="{{ route('service.post') }}" method="POST">
                    @csrf
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="form-floating-1"
                                    placeholder="John Doe" value="{{ Auth::user()->name }}">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2"
                                    placeholder="name@example.com" value="{{ Auth::user()->email }}">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="topic" id="floatingSelect"
                                    aria-label="Financial Consultancy">
                                    <option value="BeMarried">BeMarried</option>
                                    <option value="Married">Married</option>
                                    <option value="Baby">Baby</option>
                                    <option value="Toodler">Toodler</option>
                                    <option value="Teen">Teen</option>
                                    <option value="Financial">Financial</option>
                                </select>
                                <label for="floatingSelect">Select A Topic</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="question" class="form-control" id="form-floating-2"
                                    placeholder="Question">
                                <label for="form-floating-2">Question</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" placeholder="Description" id="form-floating-4"
                                    style="height: 150px"></textarea>
                                <label for="form-floating-4">Description</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
@endsection
