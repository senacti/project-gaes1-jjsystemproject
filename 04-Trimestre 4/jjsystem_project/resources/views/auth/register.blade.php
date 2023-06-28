<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('CSS/FormulariosStyle.css')}}">
    <title>Registrarse</title>
</head>
<body>
  
    <div class="contenedorPrincipal">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="contenedor-register">
            <h1 class="Titulo">Registrarse</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="Datos">
                    <div class="Input-datos-formularios">
                        <label for="numeroDocumento">Numero de documento</label>
                        <input type="number" id="numeroDocumento" name="numeroDocumento" required/>
                        <label>Nombre</label>
                        <input type="text" id="Nombre" name="nombre" required/>
                        <label>Apellido</label>
                        <input type="text" id="Apellido" name="apellido" required/>
                        <label>Email</label>
                        <input type="email" class="input" name="email">
                        <label>Contraseña</label>
                        <input type="password" class="input" name="password" required id="password">
                        <label>Numero de Contacto</label>
                        <input type="number" id="numeroContacto" name="numeroContacto" required max=""/>

                        <div class="check-botton">
                            <input type="radio" name="AceptaTerminos" id="AceptaTerminos" required/>
                            <label>Acepto los terminos y condiciones. </label>
                        </div>  
                        <div class="botonC">  
                            <input type="submit" value="Registrarse" id="link-registrarse">
                        </div>
                        <div class="login-registrar">
                            <a id="login" href="{{asset ('login')}}">Iniciar Sesion</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>

