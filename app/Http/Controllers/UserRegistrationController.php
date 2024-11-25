<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class UserRegistrationController extends Controller
{
    /**
     * Show the registration form.
     */
    public function create()
    {
        return view('user.registration.create');
    }

    /**
     * Store the registration data.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'education_level' => 'required|string',
        ]);

        Registration::create($validated);

        return redirect()->route('registration.success')->with('message', 'Pendaftaran berhasil!');
    }

    /**
     * Show a success message after registration.
     */
    public function success()
    {
        return view('user.registration.success');
    }
}
