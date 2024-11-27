<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();
        return view('admin.registrations.index', compact('registrations'));
    }

    public function create()
    {
        return view('admin.registrations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'regex:/^\+62[0-9]{9,13}$/',
                'max:15'
            ],
            'education_level' => 'required|in:Farmasi Klinis dan Komunitas,Desain Komunikasi Visual (DKV)',
        ]);

        Registration::create($request->all());

        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil ditambahkan!');
    }

    public function edit(Registration $registration)
    {
        return view('admin.registrations.edit', compact('registration'));
    }

    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'regex:/^\+62[0-9]{9,13}$/',
                'max:15'
            ],
            'education_level' => 'required|in:Farmasi Klinis dan Komunitas,Desain Komunikasi Visual (DKV)',
        ]);

        $registration->update($request->all());

        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil diperbarui!');
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
