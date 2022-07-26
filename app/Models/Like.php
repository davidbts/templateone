<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    public function users()
    {
        return $this->belongsTo(USer::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}