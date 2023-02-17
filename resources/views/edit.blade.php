@extends('layouts.master')

@section('contents')
<div class="container mt-4">
    <form action="/list/{{ $barang->id }}" method="post">
        @method('put')
        @csrf
        <table>
            <tr>
                <th colspan="2">Nama: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nama" placeholder="{{ $barang->nama }}"></td>
            </tr>
            <tr>
                <th colspan="2">Deskripsi: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="deskripsi" placeholder="{{ $barang->deskripsi }}"></td>
            </tr>
            <tr>
                <th colspan="2">Gambar: </th>
            </tr>
            <tr>
                <td colspan="2"><input type="file" name="gambar" value="{{ $barang->gambar }}"></td>
            </tr>
            <tr>
                <th colspan="2">Jumlah: </th>
            </tr>
            <tr>
                <td><input type="number" name="jumlah" value="{{ $barang->jumlah }}"></td>
                <td><button type="submit" class="btn btn-warning">Add</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection