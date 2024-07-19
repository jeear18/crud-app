<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create_prod extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'prod_name',
        'brand',
        'sel',
        'weight',
        'price,'
    ];
}
