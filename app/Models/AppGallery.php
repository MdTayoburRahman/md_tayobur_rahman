<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppGallery extends Model
{
    use HasFactory;

    // If your table name is not the plural form of your model name, specify it:
    protected $table = 'app_galleries';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'app_link',
        'image_link',
    ];
}
