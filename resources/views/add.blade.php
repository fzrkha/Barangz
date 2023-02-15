@extends('layouts.master')

@section('contents')
<div class="container mt-4">
    <form action="/crud" method="post">
        @csrf
        <table>
            <tr>
                <th>Nama Barang: </th>
                <th>Deskripsi: </th>
                <th>Gambar: </th>
                <th>Jumlah: </th>
                <th></th>
            </tr>
            <tr>
                <td><input type="text" name="nama"></td>
                <td><input type="text" name="deskripsi"></td>
                <td><input type="text" name="gambar" placeholder="file .jpg atau .png dan sejenisnya"></td>
                <td><input type="text" name="jumlah"></td>
                <td><button type="submit" class="btn btn-warning">Add</button></td>
            </tr>
        </table>
    </form>
</div>

@endsection