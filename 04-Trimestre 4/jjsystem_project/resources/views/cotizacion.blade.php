<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion - J.J System</title>
    <link href="{{asset('CSS/cotizacion.css')}}" rel="stylesheet">
    <link href="{{asset('CSS/normalize.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
</head>

<body>

    <header class="header">
        <div class="container logo-login-container">
            <a href="{{asset('Index')}}" class="logo">J.J SYSTEM</a>
            <nav class="login_navigation">
                <ul>
                    <li><a href="{{asset('register')}}">Registrarse</a></li>
                    <li><a href="{{asset('login')}}">Iniciar sesión</a></li>
                    <li><a href="{{asset('login')}}"><img class="user_img" src="{{asset('images/fotoperfil.png')}}" alt="Foto de perfil"></a></li>
                </ul>
            </nav>    
        </div>
    </header>

    <main class="main">
        <nav class="navigation_bar">
            <div class="search_bar">
                <nav class="navigation_bar_logo">
                    <a href="#"><img class="navigation_img" src="../../images/lupa.png" alt="Lupa de navegación"></a>
                </nav>
                <nav class="navigation_bar_search_box">
                    <input type="text" class="navigation_bar_input" placeholder="buscar" required>
                </nav>
            </div>
            <nav class="navigation_bar_items">
                <ul>
                    <li>
                        <a href="{{asset("visualizacion_servicios")}}">Servicios</a>
                    </li>
                    <li>
                        <a href="{{asset("Index")}}">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="#">Contactanos</a>
                    </li>
                </ul>
            </nav>
        </nav>
        
        <div class="product_or_service_list">
            <div class="product_sample">
                <img class="product_img" src="../../images/product_images/camara_uno.png" alt="Camara">
                <h3 class="product_name">Camara iBall 2.0 MP HD IR DOME IP CAMERA (IB-IPD202PM)</h3>
                <h3 class="quantity">cantidad</h3>
                <a href="#"><img class="minus_icon" src="../../images/menos.svg" alt="Icono menos"></a>
                <p>1</p>
                <a href="#"><img class="plus_icon" src="../../images/más.svg" alt="Icono más"></a>
                <button><h3>Eliminar producto</h3></button>
            </div>
            <div class="service_sample">
                <img class="helmet_img" src="../../images/casco.svg" alt="Camara">
                <h3 class="service_name">Camara iBall 2.0 MP HD IR DOME IP CAMERA (IB-IPD202PM)</h3>
                <button>
                    <a href="#"><h3>Eliminar producto</h3></a>
                </button>
            </div>
        </div>
        <div class="confirm_budget">
            <button>
                <a href="#"><h3>Hacer cotización</h3></a>
            </button>
            <p>Al dar click en hacer cotización, encontrará la cotización <br> creada con los productos y servicios agregados en su perfil. <br><br>
            La persona encargada de la revisión de cotizaciones estará <br> contactandose contigo para confirmar los datos ingresados <br> y realizar una compra.
            </p>
        </div>
    </main>

<footer class="footer">
    <div class="footer_container">
        <p> <a href="#">Diseñador de la página web</a>  | copyright [2023] | J.J System</p>
    </div>
    <div class="footer_container">
        <p> <a href="#">Sobre nosotros</a> | <a href="# ">Aviso legal y términos de uso</a> | <a href="#">Políticas de privacidad</a> | <a href="#"> Politica de cookies</a></p>
    </div>
</footer> 
</body>
</html>