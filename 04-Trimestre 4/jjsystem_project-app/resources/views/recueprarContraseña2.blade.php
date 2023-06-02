<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("CSS/FormulariosStyle.css")}}">
    <title>Recuperar contraseña</title>
</head>
<body>
    <form action="">
        <section class="contenedorPrincipal">
            <img src="../../images/FormulariosIMG/candado..png" class="icon">
            <div class="textContraseña">
                <h2 class="titulo">¿No recuerdas tu contraseña?</h2></li>
                <h4 class="subtitulo">Hemos enviado un <b>codigo</b> al  correo electronico example01@gmail.com  para reestablecer tu contraseña.
                </h4>
            </div>
            <div class="codigoComprobacion">
            <label>Ingresa el codigo:</label>
                <input type="number" maxlength="1"  required>
                <input type="number" maxlength="1"  required>
                <input type="number" maxlength="1"  required>
                <input type="number" maxlength="1"  required>
                <input type="number" maxlength="1"  required>
                <a href="">Reenviar codigo</a>
                <a href="../formularios/recuperarcontraseñaPaso3.html">Enviar SMS al (numero de registro) </a>
            </div>
        </section>
</body>
</html>