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
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($out as $items)
                <tr>
                    <td>{{ $items->barang->id }}</td>
                    <td>{{ $items->barang->nama }}</td>
                    <td>{{ $items->jumlah }}</td>
                    <td>{{ $items->tanggal_jam }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" align="right"><a href="/history">Back</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection