@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h5>Mis órdenes</h5><br><br>
                @foreach ($order as $item)
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
                                <h6>Método de pago: {{ $item->payment_method }}</h6>
                                <h6>Estatus del pago: {{ $item->payment_status }}</h6>
                                <h6>Envío a: {{ $item->address }}</h6>
                                <h6>Estatus de la entrega:  {{ $item->status }}</h6>
                            </div>
                        </div>
                       
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
