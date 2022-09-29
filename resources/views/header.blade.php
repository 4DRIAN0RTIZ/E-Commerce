<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-family: 'Petit Formal Script', cursive;" href="/">La consentida</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Inicio</a>
                </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="/myorders">Ordenes</a>
                    </li>
                
                <form action="/search" class="d-flex" role="search">
                    <input class="form-control me-2 search-box" name="query" type="search" placeholder="Búsqueda"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </ul>
            <ul class="nav nav-bar navbar-right">
                @if (Session::has('user'))
                    <li class="nav-item"><a class="nav-link active" href="/cartlist">Carrito({{ $total }})</a>
                    </li>
                @endif
                @if (Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/logout">Salir</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link active" href="/login">Ingresar</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/register">Registrarse</a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>
