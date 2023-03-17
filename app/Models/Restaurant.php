<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Restaurant extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'phone_number',
        'cover_img',
        'vat',
        'address',
        'type_id',
        'user_id',

    ];
    use HasFactory;
    

    public static function getSlug($name)
    {
        $slug = Str::slug($name);
        
        return $slug;

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dishes(){
        return $this->hasMany(Dish::class);
    } 

    public function types() {
        return $this->belongsToMany(Type::class);
    }
}
