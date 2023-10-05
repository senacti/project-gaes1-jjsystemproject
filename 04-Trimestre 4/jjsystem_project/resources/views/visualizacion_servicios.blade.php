<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - J.J System</title>
    <link href="{{asset("CSS/visualizacion_servicios.css")}}" rel="stylesheet">
    <link href="{{asset("CSS/normalize.css")}}" rel="stylesheet">
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

        <div class="services_container">
            
            <h1>Servicio Técnico</h1>

            <div class="services_offered">

                <img class="service_img" src="../../images/mantenimiento1.jpg" alt="">
                    
                <div class="service_info">

                    <h2>Instalación de productos</h2>
                    
                    <p>Este servicio está pensado para que puedas instalar los <br> productos que quieras comprar en la sección de Venta de <br> 
                    productos. Si ya creaste una lista de cotización, agrega este <br> 
                    servicio en la lista para indicar que los quieres instalar con <br> 
                    nosotros.</p>
                
                </div>
                
            </div>    
            
            <button>
                    <a href="#"><h2>Agregar a la lista de cotización</h2></a>
            </button>    
        
        </div>
        <div class="services_container_2">

            <div class="services_offered_2">
                
                <img class="service_img_2" src="../../images/mantenimiento2.jpg" alt="">
                    
                <div class="service_info_2">
                        
                    <h2>Servicio de análisis</h2>
                    
                    <p>Si requieres un sistema de seguridad electrónica pero no <br> 
                    sabes que productos necesitas, nosotros brindamos un <br> 
                    servicio de análisis en el que nuestros técnicos evalúan los <br> 
                    requerimientos de tu caso específico.</p>
                    
                </div>
                
            </div>
            
            <button>
                    <a href="{{asset('servicio_analisis')}}"><h2>Requiero un análisis</h2></a>
            </button>
        
        </div>
        <div class="services_container_3">

            <div class="services_offered_3">

                <img class="service_img_3" src="../../images/mantenimiento3.jpeg" alt="">
                    
                <div class="service_info_3">

                    <h2>Mantenimiento de productos</h2>
                    
                    <p>Si cuentas con productos de seguridad electrónica que <br> 
                        presenten fallas o quieres que sean revisados por <br> 
                        profesionales, nuestros técnicos están dispuestos a <br> 
                        ayudarte.
                
                </div>
                
            </div>    
            
            <button>
                    <a href="{{asset('servicio_mantenimiento')}}"><h2>Requiero un mantenimiento</h2></a>
            </button>
        
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