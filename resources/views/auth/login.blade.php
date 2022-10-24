@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="login" method="POST">
                    <div class="mb-4">
                        @csrf
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electrónico">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                    </div>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn btn-outline-primary">Ingresar</button><hr>
                        <a href="/login-google" style="width: 100%; background-color: #fff;" class="btn login-with-google-btn">Ingresar</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
