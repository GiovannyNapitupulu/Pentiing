@extends('Layout.auth')
@section('title')
    Pentiing | Register
@endsection
@section('form')
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    <form action="{{ route('register.action') }}" method="POST">
        @csrf
        <div class="divider d-flex align-items-center">
            <p class="text-center fw-bold mb-2">Buat Akun</p>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Masukkan E-mail" />

        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
                placeholder="Masukkan Nama Lengkap" />

        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Masukkan Password" />

        </div>
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                placeholder="Masukkan Ulang Password" />
        </div>

        <input type="hidden" name="role" value="user">
        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Buat Akun </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="/login" class="link-danger">Masuk</a>
            </p>
        </div>

    </form>
@endsection
