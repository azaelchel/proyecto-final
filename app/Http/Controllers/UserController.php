<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function create(): view
    {
        return view('usuarios.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'nombre_largo' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
        ]);

        User::create($request->all());

        return redirect()->route('usuarios.create')->with('success', 'Usuario creado con éxito');
    }
}
