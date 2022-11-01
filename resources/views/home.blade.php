@extends('master')
@section('content')
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				@foreach ($products as $item)
					<div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
						<a href="detail/{{$item ['id']}}">
							<img src="{{ $item ['gallery'] }}" class="slider-img" alt="...">
							<div class="carousel-caption d-none d-md-block caption-bg">
								<h5>{{ $item['name'] }}</h5>
								<p> {{ $item['description'] }}</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Siguiente</span>
			</button>
		</div>
		{{-- ***Carousel End*** --}}
		<center><hr style="width: 50%; size: 3; color: black;"></center>
		<div class="container">
			 <div class="row">				 
				 @foreach ($products as $item)
				 	<div class="col-md-3">
						 <a href=detail/{{$item['id']}}">
								<img class="img-fluid" src="{{$item['gallery']}}" alt="Imagen">
								<h5 class="nameP">{{ $item['name'] }}</h5>
							 </a>
					</div>
				@endforeach
				 </div>
			 </div>
		</div>
	</div>
@endsection
