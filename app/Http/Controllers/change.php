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
}
