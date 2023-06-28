<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ES=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{asset ('CSS/FormulariosStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
</head>

<body>
<Section class="contenedorPrincipal">
    <span class="icon-close">
      <ion-icon name="close-outline"></ion-icon>
    </span>
    <div class = "contenedor-login" >
      <h1 class="Titulo">Iniciar Sesion</h1>
          <form action="">
            <div class="icon-contenedor">
              <img  src="../../images/FormulariosIMG/login.png" class="icon">
            </div>  
              <div class="Datos">
                <div class="Input-datos-formularios">
                  <label>Email</label>
                  <input type="email" class="input" required  id="email">
                  <label>Contraseña</label>
                  <input type="password" class="input" required id="password">
                </div>
                <div class="botonC">
                    <input type="submit" value="Iniciar Sesion" id="iniciarSesion">
                </div >
                <div class="recuperar-contraseña">
                    <a id="recuperarContraseña" href="../formularios/recuperarcontraseña.html">Olvide mi contraseña</a></li>
                </div>
                <div class="login-registrar">
                  <a id="registrar" href="#">Registrarse</a></li>
              </div>
              </div>
        </form>
      </div>
  </Section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="../../JavaScript/formulariosLaravel.js"></script>

</body>
</html>