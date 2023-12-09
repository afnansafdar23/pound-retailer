<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable =
    [
        'name',
        'sku',
        'description',
        'features',
        'price',
        'discounted_price',
        'brand_id',
        'child_category_id',
        'sub_category_id',
        'product_length',
        'product_weight',
        'product_height',
        'product_width',
        'availability'
    ];

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function childCategory()
    {
        return $this->belongsTo(ChildCategory::class, 'child_category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
