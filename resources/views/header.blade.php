<html>
<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
$total = 0;

if (Auth::check()) {
    $total = ProductController::cartItem();
}
?>
    @include('head')
<nav class="navbar navbar-expand-lg laconsentida-color header-a">
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
                    <input class="form-control me-4 search-box" name="query" type="search" placeholder="Buscar"
                        aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </ul>
            <ul class="nav nav-bar navbar-right">
                @if (Auth::check())
                <li class="nav-item"><a class="nav-link active" href="/cartlist"><i class="fa-solid fa-cart-shopping"></i> {{ $total }}</a>
                    </li>
                <li class="nav-item"><a class="nav-link active" href="/dashboard"><i class="fa-solid fa-table-columns"></i> Panel</a>
                    </li>
                @endif
                @if (Auth::check())
                @if (Auth::user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/logout">Salir</a></li>
                        </ul>
                    </li>
                @endif
                @else
                    <li class="nav-item"><a class="nav-link active" href="/login">Ingresar</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/register">Registrarse</a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>
</html>
