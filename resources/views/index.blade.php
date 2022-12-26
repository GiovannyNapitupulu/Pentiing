@extends('layout/main')
@section('title')
    Pentiing | Married & Parenting
@endsection
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Pentiing | Married & Parenting</h5>
                            <h1 class="display-1 text-white mb-md-4">Persiapkan Diri Sebelum Menikah</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Member</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Konsultasi</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Pentiing | Married & Parenting</h5>
                            <h1 class="display-1 text-white mb-md-4">Menjadi Orang Tua dan Sahabat Anak</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Member</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">PENTIING</span></h1>
                <h4 class="text-primary mb-4">Persiapan sebelum menjadi pasangan suami istri dan menjadi orang tua</h4>
                <p class="mb-4">Pentiing akan membantu calon pasangan suami istri dalam persiapa pernikahan dan membantu
                    orang tua dalam mengasuh anak. Pentiing menyediakan banyak modul dan artikel </p>
                @auth
                @else
                    <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Login</a>
                @endauth


            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Konsultasi Secara Langsung</h3>
                            <p class="mb-0">
                                Pentiing menyediakan sesi konsultasi dengan para ahli. Konsultasi akan memberikan banyak
                                masukan dan juga akan memberi banyak ilmu yang akan sangat berguna untuk para calon suami
                                istri maupun orang tua
                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-book fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Modul Terlengkap</h3>
                            <p class="mb-0">
                                Pentiing juga menyediakan berbagai modul yang berisikan ajaran-ajaran yang pastinya
                                terlengkap dan terbaik. Modul juga dilengkapi dengan berbagai ilustrasi dan langkah-langkah
                                yang harus diambil dalam menjalankan rumah tangga.

                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Komunitas Kami</h3>
                            <p class="mb-0">
                                Komunitas juga akan menjadi bagian dari keuntungan yang akan dimiliki oleh para member
                                Pentiing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Kenapa Memilih Kami!!!</h1>
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




    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut
                            et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                            <div class="ps-4">
                                <h3>Client Name</h3>
                                <span class="text-uppercase">Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut
                            et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                            <div class="ps-4">
                                <h3>Client Name</h3>
                                <span class="text-uppercase">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Latest Blog Post</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div
                            class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>01</span>
                            <h5 class="text-uppercase m-0">Jan</h5>
                            <span>2045</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Admin</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                            </div>
                            <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div
                            class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>01</span>
                            <h5 class="text-uppercase m-0">Jan</h5>
                            <span>2045</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Admin</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                            </div>
                            <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div
                            class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>01</span>
                            <h5 class="text-uppercase m-0">Jan</h5>
                            <span>2045</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>Admin</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                            </div>
                            <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
