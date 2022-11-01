@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-4 align-items-center">
            <div class="col-sm-6 mb-4" style="background-color: #000;">
                <img class="img-fluid text-center" src="{{ $product['gallery'] }}" alt="">
            </div>    
                    <div class="col-sm-6 mb-4">
                        <a href="/home" style="color: black; text-decoration: none;"><i class="fa-solid fa-chevron-left"></i>Regresar</a>
                        <h2>{{ $product['name'] }}</h2>
                        <h3>{{ $product['price'] }}</h3>
                        <h4 class="detail-description">{{ $product['description'] }}</h4>
                        <h5 class="detail-category">{{ $product['category'] }}</h5>
                        <hr><br><br>
                        <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <button class="btn btn-primary">Agregar al carrito</button>
                        </form>
                        <br>
                        <button class="btn btn-success">Comprar ahora</button>
                    </div>
            @yield('show-products')
        </div>
    </div>
@endsection
