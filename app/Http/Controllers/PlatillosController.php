<?php

namespace App\Http\Controllers;

use App\Models\Platillos;
use Illuminate\Http\Request;
use App\Models\Categorias;

class PlatillosController extends Controller
{
    public function index()
    {
        $platillos = Platillos::all();
        return view('platillos.index', compact('platillos'));
    }

    public function create()
    {
        $categorias = Categorias::all();
        return view('platillos.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        // Valida y guarda el nuevo platillo
    }

    public function edit(Platillos $platillo)
    {
        return view('platillos.edit', compact('platillo'));
    }

    public function update(Request $request, Platillos $platillo)
    {
        // Valida y actualiza el platillo existente
    }

    public function destroy(Platillos $platillo)
    {
        // Elimina el platillo
    }
}
