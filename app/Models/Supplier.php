<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $primaryKey = 'SupplierID';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'SupplierID',
        'company_name',
        'phone',
        'email',
        'address',
        'postal_code',
        'type',
        'NIF'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_supplier', 'SupplierID', 'ProductID');
    }
}
