@extends('layouts.master')

@section('contents')
<center><h1>Profile</h1></center>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <div class="pp">
                <img src="{{ asset('img') }}/{{ auth()->user()->gambar }}" width="300" height="300">
            </div> 
        </div>
        <div class="col-6 mt-5">
            <h3>Nama: {{ auth()->user()->name }}</h3><br>
                <h3>Username: {{ auth()->user()->username }}</h3><br>
                <h3>Email: {{ auth()->user()->email }}</h3>
        </div>
    </div>
</div>
@endsection