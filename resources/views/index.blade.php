@extends('layouts.master')

@section('contents')
@auth
<div class="container-fluid banner">
	<div class="container text-center">
		<h3 class="display-1"><b>Welcome, {{ auth()->user()->name }}!</b></h3>
		<a href="/insert">
			<button type="button" class="btn btn-warning btn-lg">
				Add item
			</button>
		</a>
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
<table align="center">
    <tr>
        <td>
            <a href="/admin-login">
                <button type="button" class="btn btn-primary btn-lg">
                    Admin
                </button>
            </a>     
        </td>
        <td>
            <a href="/operator-login">
                <button type="button" class="btn btn-danger btn-lg">
                    Operator
                </button>
            </a>        
        </td>
    </tr>
</table>
<center><p>or continue as <a href="/list" class="text-decoration-none" style="color : rgb(0, 196, 0)">guest</a></p></center>
@endauth
@endsection