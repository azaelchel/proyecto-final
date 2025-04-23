<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        $categories = Category::all(); // Traemos todas las categorías
        return view('products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('products.create')->with('success', 'Producto creado con éxito');
    }



}
