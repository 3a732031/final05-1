<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'users_id',
        'products_id',
        'amount'
    ];

    public function products()
    {
        return $this->belongsToMany(product::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
