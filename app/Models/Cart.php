<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',

    ];

    public function product()
    {
        $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}