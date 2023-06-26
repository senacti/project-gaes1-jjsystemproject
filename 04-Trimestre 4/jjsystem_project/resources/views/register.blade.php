<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('CSS/FormulariosStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" >
    <title>Registrarse</title>
</head>
<body>
<Section class="contenedorPrincipal">
        <span class="icon-close">
          <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class = "contenedor-register" >
            <h1 class="Titulo">Registrarse</h1>
                <form action="">
                      <div class="Datos">
                        <div class="Input-datos-formularios">
                        <label for="NumeroDocumento">Numero de documento</label>
                            <input type="number" id="NumeroDocumento"name="NumeroDocumento" required/>
                            <label>Nombre</label>
                            <input type="text" id="Nombre" name="Nombre" required/>
                            <label >Apellido</label>
                            <input type="text" id="Apellido" name="Apellido" required/>
                            <label>Email</label>
                            <input type="email" class="input" name="email*">
                            <label>Contraseña</label>
                                <input type="password" class="input" required id="password1">
                            <label>Numero de teléfono</label>
                            <input type="number" id="NumeroTelefono" name="NumeroTelefono" required max=""/>

                      <div class="check-botton">
                        <input type="radio" name="AceptaTerminos" id="AceptaTerminos" required/>
                        <label >Acepto los terminos y condiciones. </label>
                      </div>  
                      <div class="botonC">  
                          <input type="submit" value="Registrarse" id="link-registrarse">
                      </div >
                      <div class="login-registrar">
                              <a id="login" href="#">Iniciar Sesion</a></li>
                      </div>
                    </div>
                    </div>
                  </div>    
            </form>
        </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>