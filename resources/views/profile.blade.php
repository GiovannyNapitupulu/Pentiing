@extends('layout.main')
@section('title')
@endsection
@section('content2')
    <div class="row mb-2">
        <div class="col text-center">
            <h4>Edit Profile</h4>
        </div>
    </div>
    <div class="container" style="padding: 5%">
        <form action="{{ route('user.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="nama" value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Membership</label>
                <input type="text" name="type" class="form-control" id="exampleFormControlInput1" value=" {{ Auth::user()->type }}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" value="">
            </div>
            <div class="btn-buy">
                <button class="btn btn-primary " type="submit">Update</button>
                <a class="btn btn-primary" href="{{ route('dokter.konsultasi') }}">Konsultasi saya</a>
            </div>
    </div>
@endsection
