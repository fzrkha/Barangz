<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'jumlah'
    ];

    public function masuk() {
        return $this->hasMany(masuk::class);
    }

    public function keluar() {
        return $this->hasMany(keluar::class);
    }
}
