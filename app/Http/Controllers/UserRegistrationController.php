<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Log;

class UserRegistrationController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.registration.create');
    }

    /**
     * Store the registration data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'regex:/^(\+62|62|0)8[1-9][0-9]{6,}$/', // Validates Indonesian phone numbers
                'max:15'
            ],
            'education_level' => 'required|in:Farmasi Klinis dan Komunitas,Desain Komunikasi Visual (DKV)',
        ], [
            'phone.regex' => 'Nomor telepon harus berupa nomor WhatsApp Indonesia yang valid.',
        ]);

        try {
            // Store the registration data
            Registration::create($validated);

            // Redirect to success page with a success message
            return redirect()->route('registration.success')->with('message', 'Pendaftaran berhasil!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error during registration: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->withErrors('Terjadi kesalahan saat memproses pendaftaran. Silakan coba lagi.');
        }
    }

    /**
     * Show a success message after registration.
     *
     * @return \Illuminate\View\View
     */
    public function success()
    {
        return view('user.registration.success');
    }
}
