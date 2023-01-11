<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'name',
        'code',
        'discount_percent',
        'expire',
        'status',
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
