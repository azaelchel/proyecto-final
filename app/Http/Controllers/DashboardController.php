<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtenemos todos los registros necesarios
        $users = User::all();
        $phones = Phone::all();
        $categories = Category::all();
        $products = Product::all();

        return view('dashboard', compact('users', 'phones', 'categories', 'products'));
    }
}
