@extends('layouts.master')

@section('contents')
@auth
<div class="container-fluid banner">
	<div class="container text-center">
		<h3 class="display-1"><b>Welcome, {{ auth()->user()->name }}!</b></h3>
		<a href="#start">
			<button type="button" class="btn btn-warning btn-lg">
				Start
			</button>
		</a>
	</div>
</div>

<div class="container-fluid pt-5 pb-5">
	<div class="container text-center">
		<div class="pp">
			<a href="/profile/{{ auth()->user()->username }}"><img src="{{ asset('img') }}/{{ auth()->user()->gambar }}" width="150" height="150" class="rounded-circle mb-3"></a>
		</div>
		<h2 id="start"><a href="/profile/{{ auth()->user()->username }}" class="text-decoration-none" style="color : black">{{ auth()->user()->name }}</a></h2>
		<small>({{ auth()->user()->level }})</small>
		<div class="row pt-4">
			<div class="col-md-4">
				<a href="/list">
					<button type="button" class="btn btn-warning btn-lg">
						<h1 class="display-1"><i class="bi bi-list-ul" width="200" height="200"></i></h1>
					</button>
				</a>
				<a href="/list" class="text-decoration-none" style="color : black"><h3>Item List</h3></a>
			</div>
			<div class="col-md-4">
				<a href="/history/in">
					<button type="button" class="btn btn-warning btn-lg">
						<h1 class="display-1"><i class="bi bi-box-arrow-in-down"></i></h1>
					</button>
				</a>
				<a href="/history/in" class="text-decoration-none" style="color : black"><h3>History barang masuk</h3></a>
			</div>
			<div class="col-md-4">
				<a href="/history/out">
					<button type="button" class="btn btn-warning btn-lg">
						<h1 class="display-1"><i class="bi bi-box-arrow-up"></i></h1>
					</button>
				</a>
				<a href="/history/out" class="text-decoration-none" style="color : black"><h3>History barang keluar</h3></a>
			</div>
		</div>
	</div>
</div>
@else
<div class="container-fluid banner">
	<div class="container text-center">
		<h3 class="display-1"><b>Welcome!</b></h3>
		<a href="#home">
			<button type="button" class="btn btn-warning btn-lg">
				Start
			</button>
		</a>
	</div>
</div>

<div class="container-fluid pt-5 pb-5">
	<div class="container text-center">
		<h2 class="display-3" id="home">Login to continue</h2>
	</div>
</div>
<center>
	<a href="/login">
		<button type="button" class="btn btn-primary btn-lg">
			Login
		</button>
	</a>
</center>
<center><p>or continue as <a href="/list" class="text-decoration-none" style="color : rgb(0, 196, 0)">guest</a></p></center>
@endauth
@endsection