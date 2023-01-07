@extends('layout.main')
@section('title')
    Pentiing | Service
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Membership</h1>
                <a href="">Beranda</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Membership</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Kenapa Memilih Kami!!</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3>Terbaik</h3>
                        <p class="mb-0">
                            Kami dapat memastikan kami yang terbaik dengan pelayanan terbaik
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
                        <h3>90% Pelanggan Kami Puas</h3>
                        <p class="mb-0">
                            Pentiing menjamin kepuasan dari para member dengan fitur dan pelayanan yang baik
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Sudah Diakui</h3>
                        <p class="mb-0">Pentiing sudah diakui dalam pelayanan yang sudah profesional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="img/feature.jpg" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">
                            Konsultan Renjun merupakan salah satu konsultan terbaik yang ada pada Pentiing. Anda bisa
                            melakukan konsultasi secara langsung dengan Renjun.
                            Renjun akan membantu memberi bimbingan dan mengarahkan bagaimana menghadapi berbagai situasi.
                            Mulai dari sebelum pernikahan hingga memiliki anak.
                        </p>
                        <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Ayo Kunsultasi!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3>100% Menjadi Keluarga Bahagia</h3>
                        <p class="mb-0">
                            Pentiing membantu dan mendengarkan bagaimana menjadi keluarga bahagia
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3>Profesional Konsultan</h3>
                        <p class="mb-0">Pentiing menyediakan konsultan yang sudah berpengalaman dalam bidangnya</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>24/7 Selalu Ada</h3>
                        <p class="mb-0">Pentiing selalu ada dan selalu sedia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- ======= harga Section ======= -->
    <section id="harga" class="harga">
        <div class="container">

            <div class="section-title">
                <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                    <h1 class="display-5 mb-0">Membersip with Us</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <p>
                    Berikut penawaran harga yang kami sediakan disertai dengan fitur yang dapat diakses :
                </p>
            </div>
            <center>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Member Gold</h5>
                                <p class="card-text"></p>
                                <h4><sup>Rp</sup>400k</h4>
                                <ul>
                                    <li>Konsultasi Gratis 2 kali</li>
                                    <li>Modul</li>
                                    <li>Artikel</li>
                                    <li class="na">Komunitas</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{ route('pemesanan', ['type' => 'gold']) }}"
                                        class="btn btn-buy btn-primary">Pesan!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Member Platinum</h5>
                                <p class="card-text">
                                <h4><sup>Rp</sup>500k</h4>
                                <ul>
                                    <li>Konsultasi Gratis 5 kali</li>
                                    <li>Modul</li>
                                    <li>Artikel</li>
                                    <li>Komunitas</li>
                                    <div class="btn-wrap">
                                        <a href="{{ route('pemesanan', ['type' => 'platinum']) }}"
                                            class="btn btn-buy btn-primary">Pesan!</a>
                                    </div>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

        </div>
    </section><!-- End harga Section -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
