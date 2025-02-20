<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'thumbnail',
        'images',
        'title',
        'price',
        'brand',
        'size',
        'color',
        'category',
        'tag',
        'status',
    ];

    public function CategoryName()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function BrandName()
    {
        return $this->belongsTo(Branding::class, 'brand', 'id');
    }
}
