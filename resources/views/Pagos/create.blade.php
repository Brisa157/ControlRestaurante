@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles de la Orden #{{ $orden->id }}</h2>
        <div class="ui segment">
            <h3>Información de la Orden:</h3>
            <p>Fecha: {{ $orden->fecha }}</p>
            <p>Estatus: {{ $orden->status }}</p>
        </div>
@endsection
