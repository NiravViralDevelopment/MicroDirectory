<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\ManageOrder;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('id', 'desc')->get();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'code' => 'nullable|min:2|max:3',
            'phone_code' => 'nullable|digits',
        ]);

        Country::create($request->all());
        return redirect()->route('countries')->with('message', 'Country created successfully.');
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'code' => 'nullable|min:2|max:3',
            'phone_code' => 'nullable|digits',
        ]);

        $country = Country::findOrFail($id);
        $country->update($request->all());
        return redirect()->route('countries')->with('message', 'Country updated successfully.');
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->route('countries')->with('message', 'Country deleted successfully.');
    }
}
