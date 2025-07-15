<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSection extends Model
{
    protected $fillable = ['title', 'description', 'image', 'bullet_points'];

    protected $casts = [
        'bullet_points' => 'array',
    ];
}
