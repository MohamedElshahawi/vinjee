<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'price',
        'subcategory_id',
    ];



    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function getSubcategoryName()
    {
        return $this->subcategory->name ?? null;
    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function stockForSize($sizeId)
{
    $stock = $this->stocks->where('size_id', $sizeId)->first();

    return $stock ? $stock->quantity : 0;
}
}
