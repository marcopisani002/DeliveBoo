<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',	
        'customer_surname',	
        'customer_address',	
        'customer_phone',
        'total_amount',
    ];

    use HasFactory;

    public function dishes() {
    return $this->belongsToMany(Dish::class);

}

}
