<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'ctg' ,
        'price' ,
        'invt' ,
        'color'  ,
        'image' ,
    ];
    public function manager(){
        return $this -> belongsTo(manager::class);
    }
    public function users(){
        return $this -> belongsToMany(user::class);
    }
    public function orders(){
        return $this -> belongsToMany(order::class);
    }
}
