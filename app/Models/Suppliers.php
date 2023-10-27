<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillable = [
        "company_name",
        "phone",
        "email",
        "address",
        "postal_code",
        "type",
        "NIF"
    ];
}
