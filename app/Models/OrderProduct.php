<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrderID',
        'ProductID',
        'quantity',
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class, 'OrderID');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
