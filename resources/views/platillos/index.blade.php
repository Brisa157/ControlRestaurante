@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Platillos
            <a href="{{ route('platillos.create') }}" class="ui green button" style="float: right;">NUEVO PLATILLO</a>
        </h2>
        <!-- Mostrar la tabla con los platillos -->
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($platillos as $platillo)
                <tr>
                    <td>{{ $platillo->id }}</td>
                    <td>{{ $platillo->name }}</td>
                    <td>{{ $platillo->categoria_nombre }}</td>
                    <td>${{ number_format($platillo->precio, 2) }}</td>
                    <td>
                        <!-- Enlaces a editar y eliminar -->
                        <div class="ui buttons">
                            <a href="{{ route('platillos.edit', $platillo->id) }}" class="ui blue button">Editar</a>
                            <form action="{{ route('platillos.destroy', $platillo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="ui red button" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este platillo?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
