<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index()
    {   
        $informations = Information::all(); //Mendapatkan semua data pengguna dari Model Product

        return view('dashboard.informations.index', compact('informations'));
    }

    public function create() 
    {
        return view('dashboard.informations.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'contact_person' => 'required',
            'description' => 'required|string|max:299',
            'address' => 'required|string|max:299',
            'facebook' => 'required',
            'instagram' => 'required',
            'whatsapp' => 'required',
        ]);

        Information::create([
            'contact_person' => $request->contact_person,
            'description' => $request->description,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->route('info.index')->with('success', 'Information created successfully.');
    }

    public function edit(Information $information) 
    {
        return view('dashboard.informations.edit', compact('information'));
    }

    public function update (Request $request, Information $information)
    {
        $request->validate([
            'contact_person' => 'required',
            'description' => 'required|string|max:299',
            'address' => 'required|string|max:299',
            'facebook' => 'required',
            'instagram' => 'required',
            'whatsapp' => 'required',
        ]);

        $information->update([
            'contact_person' => $request->contact_person,
            'description' => $request->description,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->route('info.index')->with('success', 'Information updated successfully.');
    }
    
    public function destroy (Information $information) 
    {
        $information->delete();

        return redirect()->route('info.index')->with('success', 'Information deleted successfully.');
    }

    public function how_to_order()
    {   
        $informations = Information::all();

        // Mengambil satu baris data pertama dari tabel 'Information'
        $information = Information::first();

        return view('enduser.faq.how_to_order', compact('informations', 'information', 'catalogues'));
    }

    public function payment_method()
    {   
        $informations = Information::all();

        // Mengambil satu baris data pertama dari tabel 'Information'
        $information = Information::first();

        return view('enduser.faq.payment_method', compact('informations', 'information', 'catalogues'));
    }

    public function shipping()
    {   
        $informations = Information::all();

        // Mengambil satu baris data pertama dari tabel 'Information'
        $information = Information::first();

        return view('enduser.faq.shipping', compact('informations', 'information', 'catalogues'));
    }
}
