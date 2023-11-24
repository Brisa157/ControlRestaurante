@extends('layouts.app')

@section('content')
    <div class="ui middle aligned center aligned grid">
        <div class="column" style="max-width: 450px;">
            <h2 class="ui teal image header">
                <img class="ui circular image" src="{{ asset('images/logo.jpg') }}" alt="Logo">
            </h2>
            <form class="ui large form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="email" name="email" placeholder="CORREO ELECTRONICO" required autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="CONTRASEÑA" required>
                        </div>
                    </div>
                    <button type="submit" class="ui fluid large teal submit button">Iniciar Sesion</button>
                </div>

                @if (Route::has('password.request'))
                    <div class="ui message">
                        <a href="{{ route('password.request') }}">Olvide mi contraseña</a>
                    </div>
                @endif
            </form>
            <div class="ui message">
                No tienes cuenta? <a href="{{ route('register') }}">Registrate</a>
            </div>
        </div>
    </div>
@endsection
