<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\keluar;
use App\Models\masuk;
use Illuminate\Http\Request;

class change extends Controller
{
    public function destroy($id) {
        barang::find($id)->delete();
        return back();
    }

    public function edit($id) {
        $barang = barang::find($id);
        return view('edit', compact('barang'), [
            "title" => "Edit: IC-$barang->id"
        ]);
    }

    public function update(Request $request, $id) {
        barang::find($id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'jumlah' => $request->jumlah
        ]);
        return redirect("/list")->with('success','Barang berhasil diperbarui!');
    }
}
