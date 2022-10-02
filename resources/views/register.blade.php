@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
<<<<<<< HEAD
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <br>
                            <small>*{{$message}}</small>
=======
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        @error('name')
                            <small style="color:red;">*{{$message}}</small>
>>>>>>> f749806 (3.0ValidatedData)
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
<<<<<<< HEAD
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <br>
                            <small>*{{$message}}</small>
=======
                        <input type="email" name="email" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <small style="color:red;">*{{$message}}</small>
>>>>>>> f749806 (3.0ValidatedData)
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
<<<<<<< HEAD
                            <br>
                            <small>*{{$message}}</small>
=======
                            <small style="color:red;">*{{$message}}</small>
>>>>>>> f749806 (3.0ValidatedData)
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
<<<<<<< HEAD
                        {!! NoCaptcha::renderJs('es-419', false, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
                    </div>
=======
                        <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    {{-- <div class="mb-2">
                        {!! NoCaptcha::renderJs('es-419', false, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
                    </div> --}}
>>>>>>> f749806 (3.0ValidatedData)
                    <button type="submit" class="btn btn-secondary">Registrarme</button>
                </form>
            </div>
        </div>

    </div>
<<<<<<< HEAD
@endsection
<script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>
=======
{{-- <script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script> --}}
@endsection
>>>>>>> f749806 (3.0ValidatedData)
  