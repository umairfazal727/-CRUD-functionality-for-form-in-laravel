<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'description',
        'quantity',
        'price',
    ];

    public function productOrders()
    {
        return $this->hasMany(Order::class);
    }

    public function getOrdersAttribute()
    {
        return $this->productOrders()->get();
    }
}
