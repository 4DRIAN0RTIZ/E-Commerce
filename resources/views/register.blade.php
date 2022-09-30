@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        {!! NoCaptcha::renderJs('es-419', false, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                    <button type="submit" class="btn btn-secondary">Registrarme</button>
                </form>
            </div>
        </div>

    </div>
@endsection
<script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>
  