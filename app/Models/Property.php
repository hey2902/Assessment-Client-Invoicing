<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name', 'address'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
