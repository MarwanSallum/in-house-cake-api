<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'city',
        'settings',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
