<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout_detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'orders_id',
        'products_id',
        'amount',
        'total',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function products()
    {
        return $this->belongsToMany(product::class);
    }
}
