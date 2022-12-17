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
            <p class="text-center fw-bold mb-2">Register</p>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />

        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Full name</label>
            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />

        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />

        </div>
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Confirm Password</label>
            <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password confirmation" />
        </div>

        <input type="hidden" name="role" value="user">
        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login" class="link-danger">Login</a>
            </p>
        </div>

    </form>
@endsection
