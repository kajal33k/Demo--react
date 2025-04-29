<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'goal_amount',
        'raised_amount',
        'slug',
        'is_active',
    ];
}
