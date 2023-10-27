<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        "brand",
        "model",
        "serial_number",
        "suplier",
        "type",
        "unit_price",
        "quantity",
        "total_price",
        "order_date",
        "shipped_date"
    ];
}
