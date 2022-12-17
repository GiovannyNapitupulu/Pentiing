@extends('layout.main')
@section('content')
    
    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">PENTIING</span></h1>
                <h4 class="text-primary mb-4">Persiapan sebelum menjadi pasangan suami istri dan menjadi orang tua</h4>
                <p class="mb-4">Pentiing akan membantu calon pasangan suami istri dalam persiapa pernikahan dan membantu orang tua dalam mengasuh anak. Pentiing menyediakan banyak modul dan artikel</p>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Konsultasi Secara Langsung</h3>
                            <p class="mb-0">
                                Pentiing menyediakan sesi konsultasi dengan para ahli. Konsultasi akan memberikan banyak masukan dan juga akan memberi banyak ilmu yang akan sangat berguna untuk para calon suami istri maupun orang tua
                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-book fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Modul Terlengkap</h3>
                            <p class="mb-0">
                                Pentiing juga menyediakan berbagai modul yang berisikan ajaran-ajaran yang pastinya terlengkap dan terbaik. Modul juga dilengkapi dengan berbagai ilustrasi dan langkah-langkah yang harus diambil dalam menjalankan rumah tangga. 
                            
                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Komunitas Kami</h3>
                            <p class="mb-0">
                                Komunitas juga akan menjadi bagian dari keuntungan yang akan dimiliki oleh para member Pentiing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                        <h3 class="text-white">RENJUN</h3>
                        <p class="text-white text-uppercase mb-0">Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">JENO</h3>
                        <p class="text-white text-uppercase mb-0">Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">JAEMIN</h3>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
@endsection