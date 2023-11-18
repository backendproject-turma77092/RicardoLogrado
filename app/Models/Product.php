<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProductID';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'ProductID',
        'brand',
        'model',
        'serial_number',
        'type',
        'supplier',
        'unit_price',
        'units_in_stock',
        'units_on_order',
        'discontinued'
    ];

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'product_supplier', 'product_ProductID', 'supplier_SupplierID');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'ProductID');
    }
}
