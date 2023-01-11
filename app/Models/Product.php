<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Product extends Model implements HasMedia
{
    use HasUuids, HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'branch_id',
        'name',
        'description',
        'price',
        'sale_price',
        'sale_expire_date',
        'status',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('products')
            ->singleFile();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function discounts(){
        return $this->belongsToMany(Discount::class);
    }



}
