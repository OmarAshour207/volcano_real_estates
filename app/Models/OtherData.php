<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherData extends Model
{
    protected $fillable = [
        'property_id',
        'data_key',
        'data_value'
    ];
}
