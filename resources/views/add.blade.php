@extends('layouts.master')

@section('contents')
<div class="container mt-4">
    <form action="/crud" method="post">
        @csrf
        <table>
            <tr>
                <th colspan="2">Nama Barang: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th colspan="2">Deskripsi: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <th colspan="2">Gambar: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <th colspan="2">Jumlah: </th>
            </tr>
            <tr>
                <td><input type="number" name="jumlah"></td>
                <td><button type="submit" class="btn btn-warning">Add</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection