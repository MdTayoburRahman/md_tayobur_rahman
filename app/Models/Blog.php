<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'sub_title', 'body', 'thumbnail', 'likes', 'slug',
        'meta_title', 'meta_description', 'meta_keywords', 'image_alt_text'
    ];
}
