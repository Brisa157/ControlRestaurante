@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Platillo</h2>
        <!-- Formulario para editar un platillo existente -->
        <form action="{{ route('platillos.update', $platillo->id) }}" method="POST" class="ui form">
            @csrf
            @method('PUT')
            <div class="two fields">
                <div class="field">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" value="{{ $platillo->name }}" required>
                </div>
                <div class="field">
                    <label for="categoria_id">Categoría:</label>
                    <select class="ui dropdown" id="categoria_id" name="categoria_id" required>
                        <option value="">Seleccione una categoria</option>

                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $platillo->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value="{{ $platillo->precio }}" required>
            </div>
            <button class="ui black button" type="submit">Actualizar</button>
        </form>
    </div>
@endsection
