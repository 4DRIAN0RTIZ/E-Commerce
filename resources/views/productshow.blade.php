@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h3 class="mb-30">Eliminar Producto</h3>
                <form class="needs-validation" novalidate action="{{ route('product.destroy', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="opcion" value="1">

                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom01">Id</label>
                            <input type="text" class="form-control" id="validationCustom01" name="id" id="Nombre"
                                maxlength="50" readonly value="{{ $product->id }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" id="Nombre"
                                maxlength="50" readonly value="{{ $product->name }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Precio</label>
                            <input type="text" class="form-control" id="validationCustom01" name="price" id="marca"
                                maxlength="50" readonly value="{{ $product->price }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Categoría</label>
                                 <input type="text" class="form-control" id="validationCustom01" name="category" id="marca"
                                maxlength="50" readonly value="{{ $product->category }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Descripción</label>
                             <textarea readonly style="resize:none;" class="form-control" id="exampleFormControlTextarea1" name="description" id="description" rows="2"                                 maxlength="">@php
                                    echo $product->description;
                                @endphp</textarea>
                        <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <!-- <label for="validationCustom02">Foto</label>
                                            <input type="file" class="form-control" id="validationCustom02" name="imagen" id="Imagen" accept="image" readonly>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div> -->
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Imagen</label>
                                <label for=""><img src="{{ '/img/product/' . $product->gallery }}"
                                        alt="{{ $product->gallery }}"  height="100px"></label>
                                <input type="hidden" name="imagenactual" value="{{ $product->gallery }}">
                                <input type="file" class="form-control" id="validationCustom02" name="imagen"
                                    id="Imagen" accept="image" value="{{ $product->gallery }}">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="reset">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

@endsection
