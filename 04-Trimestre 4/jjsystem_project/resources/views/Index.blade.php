<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.J System</title>
    <link rel="stylesheet" href="{{asset ('CSS/index.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}"  
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
    <link rel="shortcut icon" href="../../images/image.png">
</head>
<body>

  <header class="header">
    <div class="container logo_login_container">
        <a href="{{asset('Index')}}" class="logo">J.J SYSTEM</a>
        <nav class="login_navigation">
            <ul>
                <li><button><a href="{{asset('register')}}">Registrarse</a></button></li>
                <li><button><a href="{{asset('login')}}">Iniciar sesión</a></button></li>
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
                    <a href="#about_us">Sobre nosotros</a>
                </li>
                <li>
                    <a href="">Contactanos</a>
                </li>
            </ul>
        </nav>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../images/0.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block carousel_content">
            <h4><b>Venta y servicio técnico en seguridad electronica y sistemas</b></h4>
            <h3><b>DISPONIBLES A NIVEL NACIONAL</b></h3>
            <h4><b>Invierta en su seguridad</b></h4>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../images/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../images/2.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="serv_prod_buttons">
      <a href="{{asset('venta_productos')}}">
        <figure>
          <img src="../../images/btn01.jpg" alt="Imagen botón">
          <div class="capa">
            <h5>VENTA DE PRODUCTOS</h5><br>
            <p>
              Venta de referencias variadas<br>
              de camaras de vigilancia,<br>
              DVR’s, alarmas antirrobo,<br>
              cercas eléctricas, sensores y<br> 
              mucho más. Todo a los<br>
              mejores precios<br>
            </p>
          </div>
        </figure>
      </a>

      <a href="{{asset('visualizacion_servicios')}}">
        <figure>
          <img src="../../images/btn02.jpg" alt="Imagen botón">
          <div class="capa">
            <h5>SERVICIO TÉCNICO</h5><br>
            <p>
              Si cuentas con dispositivos de<br>
              seguridad electrónica que<br>
              presenten fallas o requieres<br>
              de alguna garantía, nuestros<br>
              técnicos están aquí para<br>
              resolver tu problemas.<br>
            </p>
          </div>
        </figure>
      </a>
    </div>

    <div class="phrase">
      <h5><b>Un día seguro, ¡Seguro que es un gran día!, Que la seguridad sea lo más importante en tu día a día</b></h5>      
    </div>

    <div class="gray_part" id="about_us">
      <h4><b>Sobre nosotros</b></h4>
      <div class="gray_part_content">
        <h5>
        Somos una empresa que lleva 5 años llevando la seguridad<br>
        a negocios y hogares Colombianos. Nos dedicamos a la<br>
        venta, instalación, servicio técnico y mantenimiento de<br>
        sistemas de seguridad electrónica (cámaras, alarmas,<br>
        lectores biométricos, etc.), brindando un servicio en el que<br>
        tanto los productos como el mantenimiento de los mismos<br>
        sea de máxima calidad.<br>
        </h5>
        <img src="../../images/sobre_nosotros.jpg" alt="Sobre nosotros">
      </div>
    </div>

    <div class="white_part">
      <h4><b>Misión</b></h4>
      <div class="white_part_content">
        <img src="../../images/mision.jpeg" alt="Misión">
          <h5>
            Satisfacer las necesidades del mercado de Seguridad<br>
            Electrónica, brindando soluciones y servicios de la mejor<br>
            calidad con un equipo humano profesional e innovador<br>
            que aporte bienestar social a todos nuestros clientes,<br>
            empleados, proveedores y accionistas.<br>
          </h5>
      </div>
    </div>

    <div class="gray_part">
      <h4><b>Visión</b></h4>
      <div class="gray_part_content">
        <h5>
          Ser una empresa ampliamente reconocida a nivel nacional,<br>
          líder en el mercado de soluciones integrales de Seguridad<br>
          Electrónica, con tecnología avanzada y un recurso humano<br>
          orientado a la excelencia en servicio del cliente.<br>
        </h5>
        <img src="../../images/vision.jpg" alt="Visión">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>