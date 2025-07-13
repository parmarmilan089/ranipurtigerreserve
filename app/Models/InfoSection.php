<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoSection extends Model
{
     protected $fillable = [
        'title',
        'short_description',
        'image',
        'status',
    ];
}
