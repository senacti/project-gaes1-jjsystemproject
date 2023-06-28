<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización Pqrsf - J.J System</title>
    <link rel="stylesheet" href="{{asset('CSS/visualizacionPqrsf.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
</head>

<body>

    <header class="header">
        
        <div class="container logo-login-container">
            
            <a href="../../HTML/landign_page/Index.html" class="logo">J.J SYSTEM</a>
            
            <nav class="login_navigation">
                <ul>
                    <li><a href="{{asset('../../HTML/formularios/registro.html')}}">Registrarse</a></li>
                    <li><a href="{{asset('../../HTML/formularios/login.html')}}">Iniciar sesión</a></li>
                    <li><a href="#"><img class="user_img" src="{{asset('../../images/ft perfil.png')}}" alt="Foto de perfil"></a></li>
                </ul>
                
            </nav>
        
        </div>
        
    </header>

    <main class="main">

        <nav class="navigation_bar">
            
            <div class="search_bar">

                <nav class="navigation_bar_logo">
                    <a href="#"><img class="navigation_img" src="{{asset('../../images/lupa.png')}}" alt="Lupa de navegación"></a>
                </nav>
                
                <nav class="navigation_bar_search_box">
                    <input type="text" class="navigation_bar_input" placeholder="buscar" required>
                </nav>
            
            </div>

            <nav class="navigation_bar_items">
                
                <ul>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    
                    <li>
                        <a href="#">Sobre nosotros</a>
                    </li>
                    
                    <li>
                        <a href="#">Contactanos</a>
                    </li>
                </ul>
            
            </nav>
        
        </nav>

        <div class="pqrsf_container">

            <br><h1>PQRSF</h1><br>

            <div class="pqrsf_offered">

                <img class="pqrsf_img" src="{{asset('../../images/peticiones.png')}}" alt="">
                    
                <div class="peticiones_info">

                    <h2>Peticiones</h2><br>
                    
                    <p>Derecho que tiene todo usuario para solicitar información <br>
                    relacionada con la prestación del servicio o reclamar de <br>
                    forma respetuosa algún interés personal frente a los <br>
                    productos o servicios que ofrece la empresa.</p>
                
                </div>
                
            </div>    
            
            <button>
                    <a href="#"><h2>Agregar una petición</h2></a>
            </button>    
        
        </div>
        <div class="pqrsf_container_2">

            <div class="pqrsf_offered_2">
                
                <img class="pqrsf_img_2" src="{{asset('../../images/quejas.png')}}" alt="">
                    
                <div class="quejas_info_2">
                        
                    <h2>Quejas</h2><br>
                    
                    <p>Expresión o manifestación por inconformidad que presenta <br>
                    el usuario con alguna prestación de nuestros servicios, <br>
                    algún proceso en particular, mala conducta o la atención de <br>
                    algún empleado. </p>
                    
                </div>
                
            </div>
            
            <button>
                    <a href="#"><h2>Agregar una queja</h2></a>
            </button>
        
        </div>
        <div class="pqrsf_container_3">

            <div class="pqrsf_offered_3">

                <img class="pqrsf_img_3" src="{{asset('../../images/reclamos.png')}}" alt="">
                    
                <div class="reclamos_info_3">

                    <h2>Reclamos</h2><br>
                    
                    <p>Oposición o insatisfacción por el incumplimiento de un <br>
                    derecho del usuario que no se ha respetado, ocasionado por <br>
                    la mala prestación del servicio o fallas en el producto. </p>
                
                </div>
                
            </div>    
            
            <button>
                    <a href="#"><h2>Agregar un reclamo</h2></a>
            </button>
        
        </div>
        <div class="pqrsf_container_4">

            <div class="pqrsf_offered_4">

                <img class="pqrsf_img_4" src="{{asset('../../images/sugerencias.png')}}" alt="">
                    
                <div class="sugerencias_info_4">

                    <h2>Sugerencias</h2><br>
                    
                    <p>Propuesta o recomendación por el usuario, con el propósito <br>
                    de mejorar el servicio y/o los productos ofrecidos por la <br>
                    empresa.</p>
                
                </div>
                
            </div>    
            
            <button>
                    <a href="#"><h2>Agregar una sugerencia</h2></a>
            </button>
        
        </div>
        <div class="pqrsf_container_5">

            <div class="pqrsf_offered_5">

                <img class="pqrsf_img_5" src="{{asset('../../images/felicitaciones.png')}}" alt="">
                    
                <div class="felicitaciones_info_5">

                    <h2>Felicitaciones</h2><br>
                    
                    <p>Declaración positiva del usuario donde expresa agrado con <br>
                    los empleados, que percibe un buen servicio y se siente <br>
                    satisfecho con el mismo.</p>
                
                </div>
                
            </div>    
            
            <button>
                    <a href="#"><h2>Agregar una felicitación</h2></a>
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