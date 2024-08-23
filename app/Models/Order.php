<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function products()
    {
        return $this->hasOne(Product::class);
    }

    public function seller()
    {
        return $this->hasOne(User::class, 'seller_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
