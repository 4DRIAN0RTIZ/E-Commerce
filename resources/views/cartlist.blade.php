@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h5>Artículos en el carrito</h5>
                <a class="btn btn-success" href="ordernow">Comprar ahora</a><br><br>
                @foreach ($products as $item)
                    <div class=" row searched-item cart-list-divisor">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}" alt="Imagen">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h2>{{ $item->name }}</h2>
                                <h5 class="cart-price"><strong>{{ $item->price }}</strong></h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Eliminar del carrito</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
