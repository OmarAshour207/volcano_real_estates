<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Property extends Model
{
    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_description',
        'en_description',
        'type', // 1 => Home, 2 => Villa, 3 => chalet
        'area',
        'status', // 0 => rent, 1 => own
        'price',
        'ar_meta',
        'en_meta',
        'ar_address',
        'en_address',
        'latitude',
        'longitude',
        'state_id',
        'image'
    ];

    // Attributes
    public function getPropertyImageAttribute()
    {
        return Storage::url('public/properties/' . $this->id . '/' . $this->image);
    }

    public function files()
    {
        return $this->hasMany('App\Models\PropertyImage', 'property_id', 'id');
    }

    public function other_data()
    {
        return $this->hasMany('App\Models\OtherData', 'property_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }

    // Scopes
    public function scopeWhenState($query, $state)
    {
        return $query->when($state, function ($qu) use ($state) {
            return $qu->whereHas('state', function ($q) use ($state){
                return $q->where('id', $state);
            });
        });
    }
}
