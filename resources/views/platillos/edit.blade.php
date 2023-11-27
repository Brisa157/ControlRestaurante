@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Platillo</h2>
        <!-- Formulario para editar un platillo existente -->
        <form action="{{ route('platillos.update', $platillo->id) }}" method="POST" class="ui form">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $platillo->name }}">
            </div>
            <div class="field">
                <label for="categoria_id">Categoría:</label>
                <input type="text" id="categoria_id" name="categoria_id" value="{{ $platillo->categoria_id }}">
            </div>
            <div class="field">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value="{{ $platillo->precio }}">
            </div>
            <button class="ui button" type="submit">Actualizar</button>
        </form>
    </div>
@endsection
