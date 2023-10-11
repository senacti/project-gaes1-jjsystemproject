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
    <link rel="stylesheet" href="{{asset('css/gestion_productos.css')}}">
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
                    <a href="{{asset('home')}}" class="d-block text-light font-weight-light">Inicio</a>
                    <div class="a-selected">
                        <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Productos y Servicios</a>
                    </div>                    
                    <a href="{{asset('Citas.indexST')}}" class="d-block text-light font-weight-light">Servicio Tecnico</a>
                    <a href="{{asset('envios')}}" class="d-block text-light font-weight-light">Envios</a>
                    <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">PQRSF</a>
                    <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Clientes</a>
                    <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Tecnicos</a>
                    <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Ajustes</a>
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

                    <section class="search_prod">
                        <form class="form-inline position-relative my-2 d-inline-block">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-search position-absolute" type="submit"><img class="btn-search-img" src="../../images/lupa.png" alt="Lupa de busqueda"></i></button>
                        </form>
                    </section>

                    <section class="s-data-table">
                        <table class="table data-table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Camara 1</td>
                                <td>Descripción del producto</td>
                                <td>Proveedor 1</td>
                                <td>Camaras</td>
                                <td>300.000</td>
                                <td>11</td>
                                <td class="icon"><a href="#"><img src="{{asset('images/iconos/edit.png')}}" alt="Modificar"></a></td>
                                <td><a href="#"><img src="{{asset('images/iconos/delete.png')}}" alt="Editar"></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Camara 2</td>
                                <td>Descripción del producto</td>
                                <td>Proveedor 2</td>
                                <td>Camaras</td>
                                <td>140.000</td>
                                <td>18</td>
                                <td class="icon"><a href="#"><img src="{{asset('images/iconos/edit.png')}}" alt="Modificar"></a></td>
                                <td><a href="#"><img src="{{asset('images/iconos/delete.png')}}" alt="Editar"></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >Camara 3</td>
                                <td>Descripción del producto</td>
                                <td>Proveedor 3</td>
                                <td>Camaras</td>
                                <td>89.000</td>
                                <td>6</td>
                                <td class="icon"><a href="#"><img src="{{asset('images/iconos/edit.png')}}" alt="Modificar"></a></td>
                                <td><a href="#"><img src="{{asset('images/iconos/delete.png')}}" alt="Editar"></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td >Camara 4</td>
                                <td>Descripción del producto</td>
                                <td>Proveedor 4</td>
                                <td>Camaras</td>
                                <td>110.000</td>
                                <td>18</td>
                                <td class="icon"><a href="#"><img src="{{asset('images/iconos/edit.png')}}" alt="Modificar"></a></td>
                                <td><a href="#"><img src="{{asset('images/iconos/delete.png')}}" alt="Editar"></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td >Camara 5</td>
                                <td>Descripción del producto</td>
                                <td>Proveedor 5</td>
                                <td>Camaras</td>
                                <td>250.000</td>
                                <td>15</td>
                                <td class="icon"><a href="#"><img src="{{asset('images/iconos/edit.png')}}" alt="Modificar"></a></td>
                                <td><a href="#"><img src="{{asset('images/iconos/delete.png')}}" alt="Editar"></a></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{asset('añadir_producto')}}">
                            <button type="button" class="btn btn-create btn-success">Añadir producto</button>
                        </a>
                    </section>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@endif
@endauth