<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ES=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{asset ('CSS/Index.css')}}">
</head>

<body>

  <Section class="contenedorPrincipal">
    <span class="icon-close">
      <ion-icon name="close-outline"></ion-icon>
    </span>
    <div class = "contenedor-login" >
      <h1 class="Titulo">Iniciar Sesion</h1>
      <form method="POST" action="{{ route('login') }}">
      @csrf
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
                    <a id="recuperarContraseña" href="../formularios/recuperarcontraseña.html">Olvide mi contraseña</a>
                </div>
                <div class="login-registrar">
                  <a id="registrar" href="#">Registrarse</a>
              </div>
              </div>
        </form>
      </div>
  </Section>   
 </body>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="../../JavaScript/funcionesFormularios.js"></script>
</html>
