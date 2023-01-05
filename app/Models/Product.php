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
        return null;
    }

    public function getImagePathAttribute()
    {
        return null;
    }

}
