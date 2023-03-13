<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable = [
        'name',
        'phone_number',
        'cover_img',
        'vat',
        'address',
        'type_id',
        'user_id',

    ];
    use HasFactory;

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
