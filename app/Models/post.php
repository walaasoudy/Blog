<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Add the fillable attributes
    protected $fillable = [
        'title',
        'description',
    ];
}
