<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'properties' => 'required|numeric',
            'rooms' => 'required|numeric',
            'units' => 'required|numeric',
        ]);

        // Create new client
        $client = new Client();
        $client->name = $request->input('name');
        $client->properties = $request->input('properties');
        $client->rooms = $request->input('rooms');
        $client->units = $request->input('units');
        $client->save();

        return redirect()->back()->with('success', 'Client added successfully!');
    }

    public function calculateMonthlyPayment(Client $client)
    {
        $properties = $client->properties()->with('rooms.units')->get();
        $totalMonthlyPayment = 0;

        foreach ($properties as $property) {
            foreach ($property->rooms as $room) {
                foreach ($room->units as $unit) {
                    // Calculate monthly payment based on unit's capacity or any other criteria
                    // For example, you might calculate it based on the size of the unit, amenities provided, etc.
                    $monthlyPayment = $unit->capacity * 100; // Adjust the calculation based on your criteria
                    $totalMonthlyPayment += $monthlyPayment;
                }
            }
        }

        return response()->json(['monthly_payment' => $totalMonthlyPayment]);
    }
}
