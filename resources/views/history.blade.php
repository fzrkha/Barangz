@extends('layouts.master')

@section('contents')
<div class="mt-5">
<table align="center">
    <tr>
        <td>
            <a href="/history/in">
                <button type="button" class="btn btn-warning btn-lg">
                    Barang masuk
                </button>
            </a>     
        </td>
        <td>
            <a href="/history/out">
                <button type="button" class="btn btn-warning btn-lg">
                    Barang keluar
                </button>
            </a>        
        </td>
    </tr>
</table>
</div>
@endsection