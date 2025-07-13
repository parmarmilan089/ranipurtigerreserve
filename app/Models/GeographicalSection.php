<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeographicalSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'bullet_title',
        'bullet_points',
    ];
}
