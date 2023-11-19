<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'serial_number',
        'type',
        'supplier',
        'unit_price',
        'units_in_stock',
        'units_on_order',
        'discontinued',
    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'ProductID');
    }
}
