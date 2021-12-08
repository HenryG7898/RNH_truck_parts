<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_main_id',
        'product_id',
        'total_cost',
        'discount',
        'unit_price',
        'approve_by',
        'update_by'
    ];
}
