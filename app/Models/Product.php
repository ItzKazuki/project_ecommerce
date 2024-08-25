<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'harga',
        'desc',
        'stok',
        'gambar',
        'nama_penjual',
        'seller_id'
    ];

    public function seller()
    {
        return $this->hasMany(User::class, 'seller_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
