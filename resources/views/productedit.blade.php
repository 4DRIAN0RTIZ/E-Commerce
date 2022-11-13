@extends('master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h3 class="mb-30">Editar Producto</h3>
                <form class="needs-validation" novalidate action="{{ route('product.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="opcion" value="1">

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Id</label>
                            <input type="text" class="form-control" id="validationCustom01" name="id" id="Nombre"
                            maxlength="50" readonly value="{{ $product->id }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" id="name"
                            maxlength="50" required value="{{ $product->name}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Precio</label>
                            <input type="text" class="form-control" id="validationCustom01" name="price" id="price"
                            maxlength="50" required value="{{ $product->price}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea style="resize:none;" class="form-control" id="exampleFormControlTextarea1" name="description" id="description" rows="2"                                 maxlength="">@php
                                    echo $product->description;
                                @endphp</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Categoria</label>
                                <select class="form-select" name="category" id="category" Selected="{{ $product->category}}">
                                    <option value="" selected>{{$product->category}}</option>
                                    <option></option>
                                    <option value="Invitaciones">Invitaciones</option>
                                    <option value="Vestidos">Vestidos</option>
                                    <option value="Ramos">Ramos</option>
                                    <option value="Pasteles">Pasteles</option>
                                    <option value="Salones">Salones</option>
                                    <option value="Sesiones">Sesiones</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Imagen</label>
                            <label for=""><img src="{{ '/img/product/' . $product->gallery }}"
                                    alt="{{ $product->gallery }}"  height="100px"></label>
                             <input type="hidden" name="imagenactual" value="{{ $product->gallery }}">
                            <input type="file" class="form-control" id="validationCustom02" name="gallery" id="gallery"
                            accept="image" value="{{ $product->gallery }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        {{-- <div class="col-md-3 mb-3"> --}}
                        {{--     <label for="validationCustom04">Estatus</label><br> --}}
                        {{--     <select class="custom-select" id="validationCustom04" name="status" id="Status" required> --}}
                        {{--         <option selected value="">Seleccionar...</option> --}}
                        {{--         <option value="Activo">Activo</option> --}}
                        {{--         <option value="Inactivo">Inactivo</option> --}}
                        {{--     </select> --}}
                        {{--     <div class="invalid-feedback"> --}}
                        {{--         Please select a valid state. --}}
                        {{--     </div> --}}
                        {{-- </div> --}}
                    </div>
                    <div class="mb-8">
                        <button class="btn btn-secondary radius" type="reset">Cancelar</button>
                        <button class="btn btn-success radius" type="submit">Actualizar</button><br><br>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection
