<!-- BUAT TAMPILAN REGIS BARU -->

<!-- Struktur HTML -->
@extends('abidzar_main')

<!-- start section -->
@section('container')

  <!-- Registrasi Page -->
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6 min-vh-100 banner"></div>
      <div class="col-md-6">
        <div class="m-auto" style="width: 90%">
          <h2 class="fw-bold mb-4">Register</h2>
          <form action="/abidzar_daftar" method="post">
            @csrf
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" 
                     class="form-control" i
                     d="email" 
                     name="email" 
                     required>
            </div>
            <!-- Nama -->
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" 
                     class="form-control" 
                     id="name" 
                     name="name" 
                     required>
            </div>
            <!-- No Hp -->
            <div class="mb-3">
              <label for="no_hp" class="form-label">Nomor Handphone</label>
              <input type="tel" 
                     class="form-control" 
                     id="no_hp" 
                     name="no_hp" 
                     required>
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required> 
            </div>
            <!-- Konfirmasi Password -->
            <div class="mb-4">
              <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
              <input type="password" 
                     class="form-control @error('konfirmasi_password') is-invalid @enderror" 
                     id="konfirmasi_password" 
                     name="konfirmasi_password" 
                     required>
                
              @error('konfirmasi_password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
            </div>
            <!-- Button Daftar -->
            <button type="submit" class="btn btn-primary px-4">Daftar</button>
          </form>
          <!-- Link Page Login -->
          <p class="mt-3">Anda sudah punya akun? <a href="/abidzar_login">Login</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- end section -->
@endsection