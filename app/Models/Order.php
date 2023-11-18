<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrderID',
        'postal_code',
        'total_price',
        'order_date',
        'shipped_date',
        // 'customer_CustomerID',
        // 'customer_CustomerID'
        // vários productos vem em
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_CustomerID');
    }
}
