<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros Pqrsf - JJ SYSTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/gestion_productos.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
</head>
<body>
<div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h2 class="text-light font-weight-bold">J.J System</h2>
            </div>
                <div class="menu">
                    <a href="#" class="d-block text-light font-weight-light">Inicio</a>
                    <a href="#" class="d-block text-light font-weight-light">Productos y Servicios</a>                   
                    <a href="#" class="d-block text-light font-weight-light">Servicio Tecnico</a>
                    <a href="#" class="d-block text-light font-weight-light">Envios</a>
                    <div class="a-selected">
                        <a href="#" class="d-block text-light font-weight-light">PQRSF</a>
                    </div>
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
                                <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div id="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 allowed_prod">
                                    <h2 class="font-weight-bold">Registros Pqrsf:</h2>
                                </div>
                            </div>
                        </div>
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
                                <th scope="col">Fecha</th>
                                <th scope="col">Información</th>
                                <th scope="col">Id_Cliente</th>
                                <th scope="col">Tipo Pqrsf</th>
                                <th scope="col">Estado</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($pqrsfs as $pqrsf)
                            <tr>
                                <td>{{ $pqrsf->idPQRSF}}</td>
                                <td>{{ $pqrsf->fechaPQRSF}}</td>
                                <td>{{ $pqrsf->informacionPQRSF}}</td>
                                <td>{{ $pqrsf->Cliente_idCliente}}</td>
                                <td>{{ $pqrsf->TipoPQRSF_idTipoPQRSF}}</td>
                                <td>{{ $pqrsf->EstadoPQRSF_idEstadoPQRSF->nombreestadoPQRSF }}</td>
                                <td> <a href="{{ url ('pqrsf/'.$pqrsf->idPQRSF.'/edit') }}" class="btn btn-primary btn-sw">Modificar</a></td>
                                <td>
                                    <form action="{{ url('pqrsf/' .$pqrsf->idPQRSF) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br><a href="{{ url('pqrsf/create') }}" class="btn btn-primary btn-sm">Añadir Pqrsf</a>
                        <a href="{{ route('export') }}" class="btn btn-success btn-sm">Exportar</a>
                    </section>
                </div>
            </div>
        </div>

</body>
</html>