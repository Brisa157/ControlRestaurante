@extends('layouts.app')

@section('content')
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="twelve wide column">
                <h1 class="ui header">MI RESTAURANTE</h1>

                <div class="ui cards">
                    <!-- Restaurant Information -->
                    <div class="card">
                        <div class="content">
                            <div class="header">Información Restaurante</div>
                            <div class="description">
                                <p>Address: 123 Main St</p>
                                <p>Phone: (123) 456-7890</p>
                                <p>Manager: John Doe</p>
                            </div>
                        </div>
                    </div>

                    <!-- Orders -->
                    <div class="card">
                        <div class="content">
                            <div class="header">Ordenes Recientes</div>
                            <div class="description">
                                <p>Order #001 - 3x Pizza, 2x Soda - $25.00</p>
                                <p>Order #002 - 1x Pasta, 1x Salad - $15.00</p>
                                <p>Order #003 - 2x Burger, 1x Fries - $18.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
