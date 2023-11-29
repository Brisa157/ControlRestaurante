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

        foreach ($platillos as $platillo) {
            $categoria = Categorias::find($platillo->categoria_id);
            $platillo->categoria_nombre = $categoria ? $categoria->name : 'N/A';
        }

        return view('platillos.index', compact('platillos'));
    }

    public function create()
    {
        $categorias = Categorias::all();
        return view('platillos.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:platillos|max:255',
            'categoria_id' => 'required|max:255',
            'precio' => 'required|max:255',
        ]);

        Platillos::create([
            'name' => $request->name,
            'categoria_id' => $request->categoria_id,
            'precio' => $request->precio,
        ]);

        return redirect()->route('platillos.index')->with('success', 'Platillo creado correctamente');

    }

    public function edit(Platillos $platillo)
    {
        $categorias = Categorias::all();
        return view('platillos.edit', compact('categorias', 'platillo'));
    }

    public function update(Request $request, Platillos $platillo)
    {
        $request->validate([
            'name' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
            'precio' => 'required|numeric',
        ]);

        $platillo->update([
            'name' => $request->name,
            'categoria_id' => $request->categoria_id,
            'precio' => $request->precio,
        ]);

        return redirect()->route('platillos.index')->with('success', '¡El platillo se actualizó correctamente!');
    }

    public function destroy(Platillos $platillo)
    {
        $platillo->delete();

        return redirect()->route('platillos.index')->with('success', 'Platillo eliminado correctamente');

    }
}
