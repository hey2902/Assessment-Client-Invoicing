<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('units.index', compact('units'));
    }

    public function create()
    {
        return view('units.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('units.create')->withErrors($validator)->withInput();
        }

        Unit::create($request->all());
        return redirect()->route('units.index');
    }

    public function edit(Unit $unit)
    {
        return view('units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('units.edit', $unit->id)->withErrors($validator)->withInput();
        }

        $unit->update($request->all());
        return redirect()->route('units.index');
    }


    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('units.index');
    }
}
