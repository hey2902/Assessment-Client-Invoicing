<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function calculateMonthlyPayment()
    {
        $totalRent = 0;

        foreach ($this->properties as $property) {
            $totalRent += $property->calculateRent();
            foreach ($property->rooms as $room) {
                $totalRent += $room->calculateRent();
                foreach ($room->units as $unit) {
                    $totalRent += $unit->calculateRent();
                }
            }
        }

        return $totalRent;
    }

}