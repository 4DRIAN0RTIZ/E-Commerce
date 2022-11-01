@extends('master')
@section('content')
    <div class="custom-product container">
        <div class="row mt-4">
        <div class="col-sm-12">
            <div class="">
                <h5><strong>Artículos en el carrito</strong></h5>
                @foreach ($products as $item)
                    <div class="row mt-2 searched-item cart-list-divisor">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="img-fluid" src="{{ $item->gallery }}" alt="Imagen">
                            </a>
                        </div>
                        <div class="col-sm-6">
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
                <a class="btn btn-success btn-lg" href="ordernow">Comprar</a><br><br>
            </div>
        </div>
           {{-- <div class="col-sm-6 text-center"> --}}
           {{--     <h5>Detalle de la compra</h5> --}}
           {{--      @foreach ($products as $item) --}}


           {{--          <h3>Total: {{ $item->price }}</h3> --}}
           {{--          <a class="btn btn-success" href="ordernow">Compar ahora</a><br><br> --}}

           {{-- </div> --}} 
        </div>
    </div>
@endsection
