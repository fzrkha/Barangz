@extends('layouts.master')

@section('contents')
<center><h1>Edit Profile</h1></center>
<div class="container mt-4">
    <form action="/profile/{{ auth()->user()->username }}" method="post">
    @method('put')
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="pp">
                <img src="{{ asset('img') }}/{{ auth()->user()->gambar }}" width="300" height="300">
                <input type="file" name="gambar">
            </div> 
        </div>
        <div class="col-6 mt-5">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: </td>
                    <td><input type="text" name="name" placeholder="{{ auth()->user()->name }}"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>: </td>
                    <td><input type="text" name="username" placeholder="{{ auth()->user()->username }}"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>: </td>
                    <td>
                        <select name="level">
                            @auth
                            @if (auth()->user()->level=="admin")
                            <option value="admin">admin</option>
                            @endif
                            @if (auth()->user()->level=="operator")
                            <option value="operator">operator</option>
                            @endif
                            @if (auth()->user()->level=="user")
                            <option value="user">user</option>
                            @endif
                            @endauth
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: </td>
                    <td><input type="email" value="{{ auth()->user()->email }}"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: </td>
                    <td><input type="password"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-warning">Simpan</button></td>
                </tr>
            </table>
        </div>
    </div>
    </form>
</div>
@endsection