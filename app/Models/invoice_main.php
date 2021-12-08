<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_main extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'invoice_nbr',
        'total_cost',
        'invoice_dt'
    ];
}
