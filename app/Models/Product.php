<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #One To Many (Inverse) / Belongs To
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
