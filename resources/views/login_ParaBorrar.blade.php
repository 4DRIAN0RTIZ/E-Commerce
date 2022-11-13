@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="width:30%; margin:auto;">
                <form action="login" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn btn-outline-primary">Ingresar</button><hr>
                        <a href="/login-google" style="width: 100%;" class="btn login-with-google-btn">Ingresar con Google</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
