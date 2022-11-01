@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">

            </div>
            <div class="col-sm-6">
                <a href="/">Regresar</a>
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
        </div>
    </div>
@endsection
