<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $appends = [
        'total_quantity',
        'image_path',
    ];

    public function units()
    {
        return $this->belongsToMany(Unit::class, 'product_unit')->withPivot('amount');
    }

    public function getTotalQuantityAttribute()
    {
        return $this->units->reduce(
            fn($totalQuantity, $unit) => $totalQuantity + $unit->pivot->amount * $unit->modifier
        );
    }

    public function getImagePathAttribute()
    {
        return $this->image?->path;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'o');
    }

}
