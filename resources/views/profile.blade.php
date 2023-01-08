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
        <form action="{{ route('pemesanan.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="btn-buy">
                <button class="btn btn-primary " type="submit">Update</button>
            </div>
    </div>
@endsection
