<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
    {
        return $this->morphToMany(Post::class, 'taggable');
    }

    public function videos()
    {
        return $this->morphToMany(Video::class, 'taggable');
    }
}
