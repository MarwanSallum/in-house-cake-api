<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'product_id',
        'number',
        'amount',
        'shopping_fee',
        'order_date',
        'order_time',
        'status'
    ];

}
