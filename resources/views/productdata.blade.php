   


   
   <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Categoría</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Imagen</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Borrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th scope="row">{{$product->id}}</th>
                                                <td>{{$product->name}}</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
<div class="row">
        <div class="col-lg-10 col-md-10">
            <h3 class="mb-30">Productos Agregados</h3>
         <div class="progress-table-wrap">
         <div class="progress-table">
            <div class="table-head">
                <div class="serial">#</div>
                <div class="country">Nombre</div>
                <div class="visit">Descripción</div>
                <div class="visit">Categoría</div>
                <div class="visit">Precio</div>
                <div class="country">Imagen</div>
                <div class="country">Editar</div>
                <div class="visit">Eliminar</div>
            </div>
            @foreach ($products as $product)
                <div class="table-row">
                    <div class="serial">{{ $product->id }}</div>
                    <div class="country">{{ $product->name }}</div>
                    <div class="visit">{{ $product->description }}</div>
                    <div class="visit">{{ $product->category }}</div>
                    <div class="visit">{{ $product->price }}</div>
                    <div class="country"> <img src="{{ '/img/product/' . $product->gallery }}" alt="{{ $product->gallery }}"
                            height="100px"></div>
                    <div class="country"><a href="{{ route('product.edit', $product->id) }}">Editar</a></div>
                    <div class="visit"><a href="{{ route('product.show', $product->id) }}">Eliminar</a></div>
                </div>
            @endforeach

        </div>
    </div>
</div>
</div>
