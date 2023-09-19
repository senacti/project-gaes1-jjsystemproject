@auth
    @if (Auth::User()->idRol == 1)
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/añadir_producto.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >

    <title>Gestión Productos - Administrador</title>
</head>
<body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h2 class="text-light font-weight-bold">J.J System</h2>
            </div>
                <div class="menu">
                    <a href="{{asset('home_admin')}}" class="d-block text-light font-weight-light">Inicio</a>
                    <div class="a-selected">
                        <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Productos y Servicios</a>
                    </div>                    
                    <a href="#" class="d-block text-light font-weight-light">Servicio Tecnico</a>
                    <a href="#" class="d-block text-light font-weight-light">Envios</a>
                    <a href="#" class="d-block text-light font-weight-light">PQRSF</a>
                    <a href="#" class="d-block text-light font-weight-light">Clientes</a>
                    <a href="#" class="d-block text-light font-weight-light">Tecnicos</a>
                    <a href="#" class="d-block text-light font-weight-light">Ajustes</a>
                </div>
            </div>
            
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <h4 class="greetings">Hola, Yoanny</h4>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto profile">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/fotoperfil.png')}}" class="img-fluid rounded-circle avatar mr-2" alt="Foto de perfil">
                                Joanny Lopez
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Mi perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Cerrar sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </li>
                        </ul>
                        </div>
                </nav>

                <div id="content">
                    <section class="available_prod">
                        <div class="container">
                                <div class="col-lg-9 allowed_prod">
                                    <h2 class="font-weight-bold">Productos <br> disponibles:</h2>
                                </div>
                        </div>
                    </section>

                <form>
                    <div class="form-group">
                        <div class="form-title">
                            <h3 class="font-weight-bold">Añadir producto</h3>
                        </div>
                        <div class="form-content">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-content">
                            <label for="price">Precio</label>
                            <input type="number" id="price" name="price" placeholder="Precio">
                        </div>
                        <div class="form-content form-supplier-quantity">
                            <label for="supplier">Proveedor</label>
                            <input type="text" id="supplier" name="supplier" placeholder="Proveedor">
                            <label for="quantity">Cantidad</label>
                            <input type="number" id="quantity" name="quantity" placeholder="Cantidad">
                        </div>
                        <div class="form-content">
                            <label for="description">Descripción</label>
                            <textarea name="descripction" id="descripction" cols="30" rows="10" placeholder="Descripción"></textarea>
                        </div>
                            <button type="button" class="btn btn-create btn-success">Confirmar</button>
                    </div>
                </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@endif
@endauth