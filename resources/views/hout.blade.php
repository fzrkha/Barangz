@extends('layouts.master')

@section('contents')
    <center><h1>Riwayat Barang yang keluar</h1></center>
    <div class="table-responsive container mt-4">
        <table class="table table-striped table-sm" border="1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($out as $items)
                <tr>
                    <td>{{ $items->barang->id }}</td>
                    <td>{{ $items->barang->nama }}</td>
                    <td>{{ $items->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection