@extends('layouts.master')

@section('contents')
    <center><h1>List of Items</h1></center>
    <div class="table-responsive container mt-4">
        <table class="table table-striped table-sm" border="1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($item as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->nama }}</td>
                    <td><img src="{{ asset('img') }}/{{ $items->gambar }}"></td>
                    <td>{{ $items->deskripsi }}</td>
                    <td>{{ $items->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection