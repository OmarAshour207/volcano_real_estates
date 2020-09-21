<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $fillable = [
        'original_name',
        'new_name',
        'size',
        'path',
        'full_file',
        'property_id'
    ];
}
