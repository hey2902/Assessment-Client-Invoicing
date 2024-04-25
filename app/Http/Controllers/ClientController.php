<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Validator;


class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->route('clients.create')->withErrors($validator)->withInput();
        }

        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,'.$client->id.'|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->route('clients.edit', $client->id)->withErrors($validator)->withInput();
        }

        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
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
