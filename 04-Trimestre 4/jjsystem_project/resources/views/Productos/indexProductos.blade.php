@extends('/layout/ptemplate')

@section('title', 'Productos')

@section('content')

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
    
@endsection