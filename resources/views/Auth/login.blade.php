@extends('Layout.auth')
@section('title')
    Pentiing | Login
@endsection
@section('form')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    <form action="{{ route('login.action') }}" method="POST">
        @csrf
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Masuk dengan</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
            </button>
        </div>

        <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name='email' id="form3Example3" class="form-control form-control-lg"
                placeholder="Masukkan E-mail" />
            <label class="form-label" for="form3Example3">E-mail</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name='password' class="form-control form-control-lg"
                placeholder="Masukkan password" />
            <label class="form-label" for="form3Example4">Password</label>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
                <input class="form-check-input me-2" name="remember" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>
            </div>
            <a href="#!" class="text-body">Lupa Password</a>
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ route('register') }}"
                    class="link-danger">Daftar</a></p>
        </div>

    </form>
@endsection
