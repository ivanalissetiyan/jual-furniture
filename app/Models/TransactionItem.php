<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'products_id', 'transactions_id'
    ];

    public function product()
    {
        //foreign key / local key 
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    // Satu ke banyak (HasMany)
    // satu ke satu (HasOne)
    // banyak ke satu (BelongsTo)
    // satu ke satu (hasOne)
}
