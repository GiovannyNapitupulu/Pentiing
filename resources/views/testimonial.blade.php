@extends('layout.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Testimonial</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Seruan Testimoni!!!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>
                        Pentiing benar-benar sangat membantu saya dalam menjalankan rumah tangga saya. Mereka membantu 
                    mulai dari persiapan pernikahan hingga akhirnya saya memiliki anak dan jangan lupa dengan konsultasi finansial 
                yang disediakan.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                        <div class="ps-4">
                            <h3>Magdalena Natalia</h3>
                            <span class="text-uppercase">Ibu Rumah Tangga</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>
                    Dengan adanya pentiing, saya menjadi tahu bagaimana menghadapi anak saya yang sangat suka tantrum dan 
                juga bagaimana menyiapkan finansial yang baik untuk persiapan anak saya sekolah</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                        <div class="ps-4">
                            <h3>Marissa Claudia</h3>
                            <span class="text-uppercase">Pegawai Kantoran</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


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
