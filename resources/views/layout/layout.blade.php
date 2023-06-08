<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    @yield('hojas-estilo')
    <title>Inicio</title>
</head>

<body>
    <!-- usuario -->
    <div class="container-fluid">

        <div class="row bg-dark text-white">
            <div class="row">
                <div class="col-1">
                    Bienvenido 
                    
                </div>

                <div class = "col-3">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Seleccione usuario</option>
                    <option value="1">Alumno</option>
                    <option value="2">Profesor</option>
                    <option value="3">Administrador de sistema</option>
                    </select>
                </div>

                <!-- cerrar sesión -->
                <div class="col-6 text-end d-none d-lg-block">
                    <a href="{{ route('home.login') }}" class="text-white">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Propuestas estudiantiles</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='propuesta.index') active @endif" href="{{route('propuesta.index')}}">Crear una propuesta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='propuesta.edit') active @endif" href="{{route('propuesta.edit')}}">Editar propuesta</a>
                        </li>
                        <li class="nav-item d-lg-none" >
                            <a class="nav-link" href="{{ Route('home.login') }}" >Cerrar Sesión</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>+
            </div>
        </nav>
    </div>

    <!-- contenido principal -->
    <div class="container-fluid">
        @yield('contenido-principal')
    </div>

    @yield('scripts-referencias')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-manual')
</body>

</html>
