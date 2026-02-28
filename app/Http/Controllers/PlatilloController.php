<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use App\Models\Menu;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    public function index()
    {
        $platillos = Platillo::with('menu')->get();
        return view('platillos.index', compact('platillos'));
    }

    public function create()
    {
        $menus = Menu::all();
        return view('platillos.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'calorias' => 'required|integer|min:0',
            'menu_id' => 'required|exists:menus,id',
        ]);

        Platillo::create([
            'nombre' => $request->nombre,
            'calorias' => $request->calorias,
            'disponible' => $request->has('disponible'),
            'menu_id' => $request->menu_id,
        ]);

        return redirect()->route('platillos.index')->with('success', 'Platillo creado.');
    }
}