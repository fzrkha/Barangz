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
                    @auth
                    @if (auth()->user()->level=="admin")
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    @endif
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($item as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td><b>{{ $items->nama }}</b></td>
                    <td><img src="{{ asset('img') }}/{{ $items->gambar }}" width="100" height="100"></td>
                    <td>{{ $items->deskripsi }}</td>
                    <td>{{ $items->jumlah }}</td>
                    @auth
                    @if (auth()->user()->level=="admin")
                    <td>
                        <div>
                            <a href="/list/{{ $items->id }}/edit">
                                <button type="button"><i class="bi bi-pencil-fill"></i></button>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <form action="/list/{{ $items->id }}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit"><i class="bi bi-trash"></i></button>
                             </form>
                        </div>
                    </td>
                    @endif
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection