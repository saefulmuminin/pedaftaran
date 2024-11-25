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
            'phone' => 'required|string|max:15',
            'education_level' => 'required|in:MTs,SMP,SMK,SMA,Madrasah Aliyah',
        ]);

        Registration::create($request->all());

        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil ditambahkan!');
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('admin.registrations.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
