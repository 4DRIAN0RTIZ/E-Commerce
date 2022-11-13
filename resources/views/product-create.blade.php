@extends('master')

@section('content')

    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h3 class="mb-30">Agregar Producto</h3>
                <form class="needs-validation" novalidate action="{{ route('product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Id</label>
                            <input type="text" class="form-control" id="validationCustom01" name="id" id="Nombre"
                                maxlength="50" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" name="nombre" id="Nombre"
                                maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Marca</label>
                            <input type="text" class="form-control" id="validationCustom01" name="marca" id="marca"
                                maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" id="Descripcion" rows="2"
                                    maxlength=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Precio</label>
                            <input type="number" step="any" class="form-control" id="validationCustom02" name="precio"
                                id="Precio">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Existencia</label>
                            <input type="text" class="form-control" id="validationCustom02" name="existencia"
                                id="Existencia">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Imagen</label>
                            <input type="file" class="form-control" id="validationCustom02" name="imagen" id="Imagen"
                                accept="image">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Estatus</label><br>
                            <select class="custom-select" id="validationCustom04" name="status" id="Status" required>
                                <option selected value="">Seleccionar...</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn genric-btn info-border radius" type="reset">Cancelar</button>
                    <button class="btn genric-btn info-border radius" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
