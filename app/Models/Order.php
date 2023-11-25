<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'postal_code',
        'total_price',
        'order_date',
        'shipped_date',
    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'OrderID');
    }

    public function getTotalPriceAttribute()
    {
        return $this->orderProducts->sum(function ($orderProduct) {
            if (!isset($orderProduct->product)) {
                $orderProduct->load('product');
            }

            return $orderProduct->quantity * $orderProduct->product->unit_price;
        });
    }
}
