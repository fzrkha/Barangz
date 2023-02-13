<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function barang() {
        return $this->belongsTo(barang::class);
    }
}
