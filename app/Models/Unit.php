<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['name', 'capacity'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function calculateRent()
    {
        return $this->rent;
    }
}

