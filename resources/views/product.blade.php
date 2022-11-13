@extends('master')
@section('content')
    <div class="custom-product">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{$item ['id']}}">
                        <img src="{{ $item['gallery'] }}" class="slider-img" alt="...">
                        <div class="carousel-caption d-none d-md-block caption-bg">
                            <h5>{{ $item['name'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <div class="trending-wrapper container">
          <h3>Artículos en trending</h3>
            @foreach ($products as $item)
                <div class="trending-item row">
                    <div class="col-md-6">
                    <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{ '/img/product/' . $item->gallery }}" alt="{{ $product->gallery }}"
                height="100px">
                    <div class="">
                        <h5>{{ $item['name'] }}</h5>

                    </div>
                     </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
