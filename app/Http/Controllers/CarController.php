<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberFormatter;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        // Membuat instance NumberFormatter
        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
        $formatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, 'Rp');

        // Memformat harga untuk setiap produk dalam daftar
        foreach ($cars as $car) {
            $price = $car->price;
            $roundedPrice = round($price);
            $formattedPrice = 'Rp. ' . number_format($roundedPrice, 0, ',', '.');
            $car->formattedPrice = $formattedPrice;
        }

        return view('dashboard.cars.index', compact('cars'), ['cars' => $cars]);
    }

    public function create()
    {
        return view('dashboard.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'specification' => 'required',
            'price' => 'required|numeric|digits_between:1,10',
            // 'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Menyimpan gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $imageFileName = basename($imagePath);
        } else {
            $imageFileName = null;
        }

        Car::create([
            'car_name' => $request->car_name,
            'specification' => $request->specification,
            'price' => $request->price,
            'image' => $imageFileName,
            'passenger' => $request->passenger,
            'baggage' => $request->baggage,
            'door' => $request->door,
            'type' => $request->type,
        ]);

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    public function show(Car $car)
    {   
        // Mendapatkan nilai harga produk dari object Car
        $price = $car->price;

        // Format nilai harga
        $formattedPrice = 'Rp. ' . number_format($price, 0, ',', '.');

        //Mengirimkan harga yang di format dan objek Car ke tampilan
        return view('dashboard.cars.show', compact('car', 'formattedPrice'));
    }

    public function edit(Car $car)
    {
        return view('dashboard.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'car_name' => 'required',
            'specification' => 'required',
            'price' => 'required|numeric|digits_between:1,10',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $imageFileName = basename($imagePath);

            // Jika Anda ingin menyimpan nama file gambar dalam kolom 'image' di model:
            $car->update([
                'image' => $imageFileName,
            ]);
        }

        $car->update([
            'car_name' => $request->car_name,
            'specification' => $request->specification,
            'price' => $request->price,
            'passenger' => $request->passenger,
            'baggage' => $request->baggage,
            'door' => $request->door,
            'type' => $request->type,
        ]);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
