<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset ('../bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('CSS/recuperarContraseña.css')}}">
</head>
<body>
    
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            contraseña
        </button>
        <form action="">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h4>
                    <img>
                    <div class="textContraseña">
                        <h2 class="subtitulo">¿No recuerdas tu contraseña?</h2></li>
                        <p class="parrafo"> No te preocupes, estamos trabajando para que recuperes tu contraseña. 
                            A continuacion ingresa tu correo electronico: </p></li>
                    </div>
                    <div class="Datos-registro">
                        <label for="email">Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <button type="submit" class="btn-continuar btn-primary">Continuar</button>
                </div>
                </div>
            </div>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>