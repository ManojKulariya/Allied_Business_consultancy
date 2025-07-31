<?php

// app/Http/Controllers/AddressController.php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::first();
        return view('admin.settings.address', compact('address'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address_line1' => 'nullable|string',
            'address_line2' => 'nullable|string',
            'area'          => 'nullable|string',
            'city'          => 'nullable|string',
            'postal_code'   => 'nullable|string',
            'state'         => 'nullable|string',
            'country'       => 'nullable|string',
        ]);

        $address = Address::first();

        if ($address) {
            $address->update($validated);
        } else {
            Address::create($validated);
        }

        return redirect()->back()->with('success', 'Address saved successfully!');
    }
}

