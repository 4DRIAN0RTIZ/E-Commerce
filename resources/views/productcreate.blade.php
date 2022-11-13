@extends('master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h3 class="mb-30">Agregar Producto</h3>
                <form class="needs-validation" novalidate action="{{ route('product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Id</label>
                            <input type="text" class="form-control" id="validationCustom01" name="id" id="Nombre"
                                maxlength="50" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" id="name"
                                maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Precio</label>
                            <input type="text" class="form-control" id="validationCustom01" name="price" id="price"
                                maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" id="description" rows="2"
                                    maxlength=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Categoria</label>
                                <select class="form-select" name="category" id="category">
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
                            <input type="file" class="form-control" id="validationCustom02" name="gallery" id="gallery"
                                accept="image">
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
                        <button class="btn btn-success radius" type="submit">Crear</button><br><br>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection
