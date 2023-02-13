<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Home"
        ]);
    }

    public function list() {
        return view('list', [
            "title" => "Item List"
        ]);
    }

    public function history() {
        return view('history', [
            "title" => "History"
        ]);
    }


    public function hisin() {
        return view('hin', [
            "title" => "History Pemasukan"
        ]);
    }

    public function hisout() {
        return view('hout', [
            "title" => "History Pengeluaran"
        ]);
    }

}
