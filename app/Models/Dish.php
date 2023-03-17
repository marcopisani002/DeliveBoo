<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public static function getSlug($name)
    {
                
        $slug = Str::slug($name);
        
        return $slug;

    }

    public function restaurants(){
        return $this->belongsTo(Restaurant::class);
        
    }
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
