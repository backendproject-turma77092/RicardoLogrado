<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        "brand",
        "model",
        "serial_number",
        "type",
        "unit_price",
        "quantity",
        "total_price"
    ];
}
