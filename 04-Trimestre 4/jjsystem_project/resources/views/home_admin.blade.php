@auth
    @if (Auth::User()->idRol == 1)
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/home_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <title>Home | Administrador</title>
</head>
<body>
    <div class="content">
        <section class="content-title">
                <h1 class="font-weight-bold">J.J System</h1>
        </section>
        <p class="admin-greeting">¡Bienvenido, Admin!</p>
        <section class="content-first-row">
            <a href="{{asset('gestion_productos')}}">
                <button class="btn prod-services">
                    <h3>Productos <br> y Servicios</h3>
                </button>
            </a>
            <a href="{{asset('Citas.indexST')}}">
                <button class="btn tech-service">
                    <h3>Servicio <br> Técnico</h3>
                </button>
            </a>
            <a href="{{asset('envios')}}">
                <button class="btn shipments">
                    <h3>Envios</h3>
                </button>
            </a>
        </section>
        <section class="content-second-row">
            <a href="">
                <button class="btn employees">
                    <h3>Empleados</h3>
                </button>
            </a>
            <a href="">
                <button class="btn customers">
                    <h3>Clientes</h3>
                </button>
            </a>
            <a href="">
                <button class="btn pqrsf">
                    <h3>PQRSF</h3>
                </button>
            </a>
        </section>
        <section class="content-third-row">
                <a href="">
                <button class="btn settings">
                    <h3>Ajustes</h3>
                </button>
            </a>
        </section>
    </div>
</body>
</html>
@endif
@endauth