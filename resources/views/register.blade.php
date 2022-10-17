@extends('master')
@section('content')
<div class="container custom-register">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
               <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        @error('name')
                            <small style="color:red;">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <small style="color:red;">*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control">
                        @error('password')
                            <small style="color:red;">*{{$message}}</small>
                        @enderror
                    </div><br>
                    <div class="mb-2">
                        {!! NoCaptcha::renderJs('es-419', true, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                            <small style="color:red;">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class=" mb-2 d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-outline-secondary">Registrarme</button><hr>
                    <a href="/login-google" style="width: 100%;" class="btn login-with-google-btn">Ingresar con Google</a>
                </div>
                </form>
            </div>
        </div>
    </div><br><br><br><br>
<script type="text/javascript">
    var onloadCallback = function() {

    };
  </script>
  <br>
@endsection

