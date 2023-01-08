<!-- BUAT TAMPILAN LOGIN BARU -->

<!-- struktur html -->
@extends('abidzar_main')

<!-- start section -->
@section('container')

<!-- Login Page -->
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6 min-vh-100 banner"></div>
      <div class="col-md-6">
        <div class="m-auto" style="width: 90%">
          <h2 class="fw-bold mb-4">Login</h2>
          <!-- Form -->
          <form action="/abidzar_login" method="post">

            @csrf
            <!-- Email -->
            <div class="mb-3 position-relative">
              <label for="email" class="form-label">Email</label>
              <input type="email" 
                     class="form-control" 
                     id="email" 
                     name="email" 
                     required>
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" 
                     class="form-control" 
                     id="password" 
                     name="password" 
                     required> 
            </div>
            <!-- Remember me -->
            <div class="form-check mb-3">
              <input class="form-check-input" 
                     type="checkbox" 
                     id="remember" 
                     name="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <!-- Login Button -->
            <button type="submit" class="btn btn-primary px-4">Login</button>

          </form>
          <!-- Link ke register page -->
          <p class="mt-3">Anda belum punya akun? <a href="/abidzar_daftar">Daftar</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Notifikasi Biru -->
  @if(session()->has('notif_biru'))
    <div class="position-fixed" style="top: 10px; right: 10px">
      @include('notif_biru')
    </div>
  
    <!-- Notifikasi Merah -->
  @elseif(session()->has('notif_merah'))
    <div class="position-fixed" style="top: 10px; right: 10px">
      @include('notif_merah')
    </div>
  @endif
  
  <!-- end section -->
@endsection