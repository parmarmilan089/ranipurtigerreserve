<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
     protected $fillable = [
        'title',
        'short_description',
        'button_text',
        'banner_image',
    ];
}
