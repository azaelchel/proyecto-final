<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PhoneController extends Controller
{
    public function create(): View
    {
        $users = User::all(); // Para mostrar usuarios en un <select>
        return view('telefonos.create', compact('users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'numero' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        Phone::create($request->all());

        return redirect()->route('telefonos.create')->with('success', 'Número guardado correctamente');
    }
}
