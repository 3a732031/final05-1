<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'users_id',
        'products_id',
        'qty',
        'sum',
        'date',
        'status',
    ];
    public function users(){
        return $this -> belongsTo(user::class);
    }
    public function products(){
        return $this -> belongsTo(product::class);
    }
}
