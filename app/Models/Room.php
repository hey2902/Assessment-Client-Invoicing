<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'capacity'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function calculateRent()
    {
        return $this->rent;
    }
}
