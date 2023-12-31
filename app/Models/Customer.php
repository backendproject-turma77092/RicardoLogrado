<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'CustomerID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CustomerID',
        'name',
        'phone',
        'email',
        'address',
        'postal_code',
        'NIF'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_CustomerID');
    }
}
