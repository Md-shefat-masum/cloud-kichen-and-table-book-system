<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class,'order_id');
    }

    public function order_booked_tables()
    {
        return $this->hasMany(OrderBookedTable::class,'order_id');
    }
}
