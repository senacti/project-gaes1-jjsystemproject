<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mantenimiento - J.J System</title>
    <link href="{{asset("CSS/servicio_mantenimiento.css")}}" rel="stylesheet">
    <link href="{{asset("CSS/normalize.css")}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container logo-login-container">
            <a href="{{asset("Index")}}" class="logo">J.J SYSTEM</a>
            <nav class="login_navigation">
                <ul>
                    <li><a href="{{asset("register")}}">Registrarse</a></li>
                    <li><a href="{{asset("login")}}">Iniciar sesión</a></li>
                    <li><a href="{{asset("login")}}"><img class="user_img" src="{{asset('images/fotoperfil.png')}}" alt="Foto de perfil"></a></li>
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

        <div class="analysis_service">
            <h1>Servicio Técnico</h1>
            <div class="analysis_description">
                <h2>Servicio de Mantenimiento</h2>
                <p>Si cuentas con productos de seguridad electrónica que presenten fallas o quieres que sean revisados por profesionales, nuestros <br>
                    técnicos están dispuestos a ayudarte. <br><br>
                    A continuación podrás llenar un formulario con los datos requeridos para contactarnos contigo y  realizar una visita a tu domicilio.
                </p>
            </div>
        </div>
        <div class="first_form">
            <form class="form" action="">
                <div class="first_part_form">
                    <div>
                        <label>Dirección</label>
                        <input type="text" name="Dirección">
                    </div>
                        
                    <div>
                        <label>Fecha de la cita (DD/MM/AA)</label>
                        <input type="date" name="fecha">
                    </div>
                </div>
                <div class="additional_description">
                    <label>Descripción adicional (opcional)</label>
                    <input type="text" name="Descripción de cita">
                </div>
                <div class="last_part_form">
                    <div class="block">
                        <input type="checkbox" name="terminos"> He leido y acepto los terminos de las politicas de seguridad y tratamiento de datos
                    </div>
                    <div class="block">
                        <button>
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
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