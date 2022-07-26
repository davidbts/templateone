<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function brand_category()
    {
        return $this->hasMany(Brand_Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
