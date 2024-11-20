<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    // Define the fields that can be mass assigned
    protected $fillable = [
        'title',
        'content',
        'author',
        'slug',
        'is_published',
        'thumbnail',
    ];
}
