<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\keluar;
use App\Models\masuk;
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
            "title" => "Item List",
            "item" => barang::all()
        ]);
    }

    public function history() {
        return view('history', [
            "title" => "History"
        ]);
    }


    public function hisin() {
        return view('hin', [
            "title" => "History Pemasukan",
            "in" => masuk::all()
        ]);
    }

    public function hisout() {
        return view('hout', [
            "title" => "History Pengeluaran",
            "out" => keluar::all()
        ]);
    }

    public function add() {
        return view('adding', [
            "title" => "Add Item"
        ]);
    }

    public function edit() {
        return view('edit', [
            "title" => "Edit Items"
        ]);
    }
}
