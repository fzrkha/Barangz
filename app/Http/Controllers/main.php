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
        return view('add', [
            "title" => "Add Item"
        ]);
    }
    public function store(Request $request) {
        $barang = new barang;
        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->gambar = $request->gambar;
        $barang->jumlah = $request->jumlah;
        $barang->save();
        return redirect('/list');
    }

    public function profile() {
        return view('auth.profile', [
            "title" => "Profile"
        ]);
    }
}
