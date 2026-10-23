<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $fillable = [
        'name',
        'age_group',
        'category',
        'price',
        'image',
        'description',
    ];

    public function getImageUrlAttribute()
    {
        return asset('assets/images/' . $this->image);
    }

    public function getPriceRpAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

}
