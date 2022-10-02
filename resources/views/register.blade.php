@extends('master')
@section('content')
    <div class="container custom-register">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
<<<<<<< HEAD
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
=======
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name')
                            <small style="color:red;">*{{ $message }}</small>
>>>>>>> eb48fb0 (ValidateCaptchaWorkedV5.0)
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
<<<<<<< HEAD
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
=======
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                        @error('email')
                            <small style="color:red;">*{{ $message }}</small>
>>>>>>> eb48fb0 (ValidateCaptchaWorkedV5.0)
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
<<<<<<< HEAD
<<<<<<< HEAD
                            <br>
                            <small>*{{$message}}</small>
=======
                            <small style="color:red;">*{{$message}}</small>
>>>>>>> f749806 (3.0ValidatedData)
=======
                            <small style="color:red;">*{{ $message }}</small>
>>>>>>> eb48fb0 (ValidateCaptchaWorkedV5.0)
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
                    <div class="mb-2">
                        {!! NoCaptcha::renderJs('es-419', true, 'onloadCallback') !!}
                        {!! NoCaptcha::display() !!}
<<<<<<< HEAD
                    </div> --}}
>>>>>>> f749806 (3.0ValidatedData)
=======
                        @error('g-recaptcha-response')
                            <small style="color:red;">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
>>>>>>> eb48fb0 (ValidateCaptchaWorkedV5.0)
                    <button type="submit" class="btn btn-secondary">Registrarme</button>
                </form>
            </div>
        </div>

    </div>
<<<<<<< HEAD
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
  
=======
    <script type="text/javascript">
        var onloadCallback = function() {
            
        };
    </script>
@endsection
>>>>>>> eb48fb0 (ValidateCaptchaWorkedV5.0)
