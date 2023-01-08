@extends('layout.admin')
@section('title')
    Pentiing | User List
@endsection
@section('content')
    <h1 class="mb-3">User List</h1>
    <div class="container shadow" style="background: white;; min-height: 50vh">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tipe Membership</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    @if ($user->role == 'user')
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <form action="{{ route('destroy.user') }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @elseif ($user->role == 'dokter')
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>-</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <form action="{{ route('destroy.user') }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
