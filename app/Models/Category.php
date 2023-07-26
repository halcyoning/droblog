<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    // untuk menghubungkan table category to post (one to many)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
