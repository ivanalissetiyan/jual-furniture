<?php

namespace App\Models;

use App\Models\ProductGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'price', 'slug'
    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    // Satu ke banyak (HasMany)
    // satu ke satu (HasOne)
    // banyak ke satu (BelongsTo);
}
