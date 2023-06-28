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

    <title>Registros Pqrsf - Administrador</title>
</head>
<body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h2 class="text-light font-weight-bold">J.J System</h2>
            </div>
                <div class="menu">
                    <a href="#" class="d-block text-light font-weight-light">Inicio</a>
                    <div class="a-selected">
                        <a href="#" class="d-block text-light font-weight-light">Productos y Servicios</a>
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
                                <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                            </li>
                        </ul>
                        </div>
                </nav>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Información</th>
                        <th scope="col">ID_Cliente</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Respuesta</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>


                <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>