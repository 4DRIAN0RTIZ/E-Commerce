@extends('master')
@section('content')
    <style>
        img {
            max-width: 100%;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .header {
            min-height: 30px;
            background: $wrapper-bg;
            background-size: cover;
            border-radius: 5px 5px 0 0;
        }

        .user-image img {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 186px;
            border-radius: 50%;
            margin: 0 auto;
            bottom: 20px;
        }

        .info {
            position: relative;
            text-align: center;
            bottom: 0px;
        }

        .name {
            color: $primary;
            font-size: 1.2em;
        }

        .work-position {
            color: #fff;
            font-size: 1.0em;
            font-style: italic;
        }
    </style>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav laconsentida-color sidebar accordion" id="accordionSidebar">

        <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <div class="header"></div>

                <div class="user-image">
                    <img src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="User" />
                </div>

                <div class="info">
                    <h5 class="name"><strong>{{ Auth::user()->name }}</strong></h5>
                    <p class="work-position">Admin</p>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Opciones
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item"> --}}
            {{--     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" --}}
            {{--         aria-expanded="true" aria-controls="collapseTwo"> --}}
            {{--         <i class="fas fa-solid fa-box"></i> --}}
            {{--         <span>Ordenes</span> --}}
            {{--     </a> --}}
            {{--     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"> --}}
            {{--         <div class="bg-white py-2 collapse-inner rounded"> --}}
            {{--             {{-1- <h6 class="collapse-header">Custom Components:</h6> -1-}} --}}
            {{--             <a class="collapse-item" href="buttons.html">Ver Ordenes</a> --}}
            {{--             {{-1- <a class="collapse-item" href="cards.html">Ver clientes</a> -1-}} --}}
            {{--             {{-1- <a class="collapse-item" href="cards.html">Cards</a> -1-}} --}}
            {{--             {{-1- <a class="collapse-item" href="cards.html">Cards</a> -1-}} --}}
            {{--             {{-1- <a class="collapse-item" href="cards.html">Cards</a> -1-}} --}}
            {{--         </div> --}}
            {{--     </div> --}}
            {{-- </li> --}}

            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item"> --}}
            {{--     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" --}}
            {{--         aria-expanded="true" aria-controls="collapseUtilities"> --}}
            {{--         <i class="fas fa-regular fa-user"></i> --}}
            {{--         <span>Usuarios</span> --}}
            {{--     </a> --}}
            {{--     <div id="collapseUser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar"> --}}
            {{--         <div class="bg-white py-2 collapse-inner rounded"> --}}
            {{--             <h6 class="collapse-header">Acciones:</h6> --}}
            {{--             <a class="collapse-item" href="utilities-color.html">Agregar</a> --}}
            {{--             <a class="collapse-item" href="utilities-border.html">Dar baja</a> --}}
            {{--             <a class="collapse-item" href="utilities-animation.html">Actualizar</a> --}}
            {{--             <a class="collapse-item" href="utilities-other.html">Ver activos</a> --}}
            {{--         </div> --}}
            {{--     </div> --}}
            {{-- </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-solid fa-tag"></i>
                    <span>Productos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="{{route('product.create')}}">Agregar Producto</a>
                        <a class="collapse-item" href="{{url('productindex')}}">Ver Productos</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> </h1>
                        <a href="pdfreport" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fa-regular fa-file-pdf"> </i> Exportar</a>
                    </div> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
            <div class="col-lg-12 col-md-12">
@isset($mensaje)
<br><br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{$mensaje}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endisset

@include('productdata')


                        </div>
</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#wrapper">
        <i class="fas fa-angle-up"></i>
    </a>

   
@endsection

{{-- <!-- Bootstrap core JavaScript--> --}}
{{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
{{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

{{-- <!-- Core plugin JavaScript--> --}}
{{-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> --}}

{{-- <!-- Custom scripts for all pages--> --}}
{{-- <script src="resources/js/"></script> --}}

{{-- <!-- Page level plugins --> --}}
{{-- <script src="vendor/chart.js/Chart.min.js"></script> --}}

{{-- <!-- Page level custom scripts --> --}}
{{-- <script src="resources/js/demo/chart-area-demo.js"></script> --}}
{{-- <script src="../js/demo/chart-pie-demo.js"></script> --}}







