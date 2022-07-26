<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcomment extends Model
{
    use HasFactory;

    protected $table = 'subcomments';

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
}
