<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - J.J System</title>
    <link rel="stylesheet" href="{{asset ('css/venta_productos.css')}}">
    <link rel="stylesheet" href="{{asset ('css/normalize.css')}}">
</head>

<body>

    <header class="header">
        
        <div class="container logo-login-container">
            
            <a href="../../HTML/landign_page/Index.html" class="logo">J.J SYSTEM</a>
            
            <nav class="login_navigation">
                <ul>
                    <li><a href="../../HTML/formularios/registro.html">Registrarse</a></li>
                    <li><a href="../../HTML/formularios/login.html">Iniciar sesión</a></li>
                    <li><a href="#"><img class="user_img" src="{{ asset('images/fotoperfil.png')}}" alt="Foto de perfil"></a></li>
                </ul>
                
            </nav>    
        
        </div>
        
    </header>

    <main class="main">

        <div class="product_container">
            
            <h1>VENTA DE PRODUCTOS</h1>
            <h2>Productos más solicitados:</h2>
            <div class="most_required">
                <a
                    href="#"><img src="../../images/product_images/camara_dos.png" alt="Camara">
                    <p>Camara Vivotek V-serie <br> Fd-htv-a - Cúpula Fija De 5</p>
                </a>
                
                <a 
                    href="#"><img class="big_sensor" src="../../images/product_images/sensor_dos.png" alt="Sensor">
                    <p>Sensor PIR FPCOLT10DL <br> -200 Pyronix</p>
                </a>
                
                <a 
                    href="#"><img src="../../images/product_images/camara_cuatro.png" alt="Camara">
                    <p>Camara Iball 800TVL <br> Smart-I Vandal-Proof Dome <br> IR Camera [IB-DV8V3DW]</p>
                </a>
            </div>
        
        </div>
        
        <div class="categories_container">

            <h1>Categorías</h1>
            
            <h2>Camaras</h2>
            
            <div class="category">
                
                <a
                    href="#"><img class="camera_sample_1" src="../../images/product_images/camara_cuatro.png" alt="Camara">
                    <p>Camara Iball 800TVL <br> Smart-I Vandal-Proof Dome <br> IR Camera [IB-DV8V3DW]</p>
                </a>
            
                <a href="#"><img class="camera_sample_2" src="../../images/product_images/camara_dos.png" alt="Camara">
                    <p>Camara Vivotek V-serie <br> Fd-htv-a - Cúpula Fija De 5</p>
                </a>
            
                <a 
                    href="#"><img class="camera_sample_3" src="../../images/product_images/camara_tres.png" alt="Camara">
                    <p>Camara IPC-HFW5842E-ASE <br> 8MP IR Fixed-focal Bullet <br> WizMind</p>
                </a>
                
                <a href="../../HTML/landign_page/camaras.html">
                    <h2 class="show_more">Ver más</h2>
                </a>

            </div>

            <h2>DVR's</h2>

            <div class="category">   
                
                <a
                    href="#"><img class="dvr_sample_1" src="../../images/product_images/dvr_uno.png" alt="dvr">
                    <p>Mini DVR 16 CANALES <br> HIKVISION TURBO HD <br> – 1080P – DS-7116HGHI-K1</p>
                </a>
                
                <a href="#"><img class="dvr_sample_2" src="../../images/product_images/dvr_dos.jpg" alt="dvr">
                    <p>Dvr 4 Canales Dahua 1mp <br> Serie X</p>
                </a>
                
                <a 
                    href="#"><img class="dvr_sample_3" src="../../images/product_images/dvr_tres.jpg" alt="dvr">
                    <p>DVR 4 Canales 4MP Lite  <br> HIKVISION - Q644.00</p>
                </a>
                
                <a href="../../HTML/landign_page/camaras.html">
                    <h2 class="show_more">Ver más</h2>
                </a>
            
            </div>
            
            <h2>Alarmas</h2>
            
            <div class="category">    
                
                <a
                    href="#"><img class="alarm_sample_1" src="../../images/product_images/alarma_uno.png" alt="alarma">
                    <p>Sirena de Seguridad 110 V Ac <br> 30W</p>
                </a>
                
                <a href="#"><img class="alarm_sample_2" src="../../images/product_images/alarma_dos.jpg" alt="alarma">
                    <p>Sirena de alarma de exterior <br> (color blanco) Detnov <br> SCD-210-W</p>
                </a>
                
                <a 
                    href="#"><img class="alarm_sample_3" src="../../images/product_images/alarma_tres.jpg" alt="alarma">
                    <p>Alarma Hikvision DS-PWA48 <br> KIT-WB</p>    
                </a>

                <a href="../../HTML/landign_page/camaras.html">
                    <h2 class="show_more">Ver más</h2>
                </a>
            
            </div>
            
            <h2>Sensores</h2>
            
            <div class="category">    
                
                <a
                    href="#"><img class="sensor_sample_1" src="../../images/product_images/sensor_uno.jpg" alt="Sensor">
                    <p>Sensor de movimiento (PIR), <br> para intemperie</p>
                </a>
                
                <a href="#"><img class="sensor_sample_2" src="../../images/product_images/sensor_dos.png" alt="Sensor">
                    <p>Sensor PIR <br> FPCOLT10DL-200 Pyronix</p>
                </a>
                
                <a 
                    href="#"><img class="sensor_sample_3" src="../../images/product_images/sensor_tres.jpg" alt="Sensor">
                    <p>Sensor de movimiento tipo <br> PIR inalambrico HIKVISION <br> DS-PD2-P10P-W</p>
                </a>
                
                <a href="../../HTML/landign_page/camaras.html">
                    <h2 class="show_more">Ver más</h2>
                </a>
            </div>
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