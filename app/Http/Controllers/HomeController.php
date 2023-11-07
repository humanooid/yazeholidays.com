<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumberFormatter;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use App\Models\Article;
use App\Models\Information;

class HomeController extends Controller
{
    public function index() {
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

        $imageFiles = Storage::files('public/images');

        $articles = Article::all();
        $informations = Information::first();

        return view('index', compact('cars','articles', 'informations'));
    }

    public function profile() {
        $informations = Information::first();

        return view('profile', compact('informations'));
    }

    public function curtain() {
        return view('curtain');
    }
}
