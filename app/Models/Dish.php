<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name', 
        'slug',
        'cover_img',
        'ingredients',
        'description',
        'price',
        'show',
        'user_id',
        'restaurant_id'
    ];

    use HasFactory;
    public function restaurants(){
        return $this->belongsTo(Restaurant::class);
        
    }
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
