<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'product_id',
        'amount',
        'sub_total',
        'quantity',
        'payment_method',
        'payment_status',
        'status',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'post_code',
        'address1',
        'address2',
    ];

    public function product(){
        return $this->hasOne(Product::class,'id', 'product_id');
    }
}
