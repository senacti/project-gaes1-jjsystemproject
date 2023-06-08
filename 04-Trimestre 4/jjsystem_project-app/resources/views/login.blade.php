<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ES=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="{{asset("CSS/FormulariosStyle.css")}}">
</head>

<body>
<Section class="contenedorPrincipal ">
    <div class = "contenedor-login" >
        <h1 class="Titulo">Iniciar Sesion</h1>
            <form action="">
            <div class="icon-contenedor">
                <img  src="../../images/FormulariosIMG/login.png" class="icon">
            </div>  
                <div class="Datos">
                <div class="Input-datos-login">
                    <label>Numero de Documento</label>
                    <input type="number" class="input" required>
                    <label>Contraseña</label>
                    <input type="password" class="input" required>
                </div>
                <div class="botonC">
                    <input type="submit" value="Iniciar Sesion" id="iniciarSesion">
                </div >
                <div class="recuperar-contraseña">
                    <a id="recuperarContraseña" href="../formularios/recuperarcontraseña.html">Olvide mi contraseña</a></li>
                </div>
            </div>
        </form>
    </div>
    
</section>
    
</body>
</html>