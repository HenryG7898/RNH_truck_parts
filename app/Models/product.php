<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_nm',
        'product_image',
        'price',
        'qty',
        'status'
    ];
}
