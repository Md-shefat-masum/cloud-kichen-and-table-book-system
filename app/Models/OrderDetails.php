<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    public function order_ingredients()
    {
        return $this->hasMany(OrderIngredient::class,'order_details_id');
    }
}
