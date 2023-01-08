@extends('layout.admin')
@section('title')
    Pentiing | Dashboard
@endsection
@section('content')
    <h1 class="mb-3">Transaction List</h1>
    <div class="container shadow" style="background: white; min-height: 50vh">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Metode Transfer</th>
                    <th scope="col">Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->pembayaran }}</td>
                        <td>
                            {{ $item->tanggal_pemesanan }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
