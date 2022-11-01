@extends('master')
@section('content')
<div class="custom-register">
        <div class="row">
            <div class="col-sm-4" style="margin:auto;">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-2">
               <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nombre">
               {{-- <input type="file" name="avatar" class="form-control"> --}}
               
                        @error('name')
                            <small style="color:red;">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Corre Electrónico">
                        @error('email')
                            <small style="color:red;">*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" class="form-control" style="margin-bottom: 10px;" placeholder="Confirmar contraseña">
                        @error('password')
                            <small style="color:red;">*{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-2 col-12">
                            {!! NoCaptcha::renderJs('es-419', true, 'onloadCallback') !!}
                            {!! NoCaptcha::display(
                                ['data-sitekey' => '6Le04EAiAAAAALWcZlyJMab13JIPRZbgKx98of6z',
                            'data-theme' => 'light', 'data-size' => 'large']) !!}
                        @error('g-recaptcha-response')
                            <small style="color:red;">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class=" mb-2 d-grid gap-3 col-12 mx-auto">
                    <button type="submit" class="btn btn-outline-secondary">Registrarme</button><hr>
                    <a href="/login-google" style="width: 100%; background-color: #fff;" class="btn login-with-google-btn">Ingresar</a>
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
