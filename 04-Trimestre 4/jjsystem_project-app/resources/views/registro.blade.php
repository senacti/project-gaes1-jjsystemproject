<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/FormulariosStyle.css')}}"">
    <title>Registrarse</title>
</head>
<body>
    <div class="contenedorPrincipal">
        <h1 class="Titulo">Registrarse</h1>
        <form action="">
            <div class="Datos">
                <div class="Input-datos">
                    <label for="Nombre">Nombre</label>
                    <input type="text"
                            id="Nombre"
                            name="Nombre"
                            required/>
                </div>
                <div class="Input-datos">
                    <label for="Apellido">Apellido</label>
                    <input type="text"
                            id="Apellido"
                            name="Apellido"
                            required/>
                </div>
                <div class="Input-datos-bloque">
                    <label for="Correo">Correo electronico</label>
                    <input type="email"
                            id="Correo"
                            name="Correo"
                            required/>
                </div>
                
                <div class="Input-datos">
                    <label for="NumeroTelefono">Numero de teléfono</label>
                    <input type="number"
                            id="NumeroTelefono"
                            name="NumeroTelefono" required max=""/>
                </div>
                <div class="Input-datos">
                    <label for="pais">Pais</label>
                    <select name=""  required>
                        <option value="Colombia"></option>
                        <option value="Colombia">Colombia</option>
                        <option value="Mexico">Mexico</option>
                    </select>    
                    <datalist>
                    </div>
                
                <div class="Input-datos">
                    <label for="NumeroDocumento">Numero de documento</label>
                    <input type="number"
                            id="NumeroDocumento"
                            name="NumeroDocumento"
                            required/>
                </div>
                <div class="Input-datos">
                    <label for="TipoDoc">Tipo Documento</label>
                    <select name=""  required>
                        <option value="Cedula de ciudadania">
                            Cedula de ciudadania</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="NIT">NIT</option>
                    </select>    
                    <datalist>
                </div>
                <div class="Input-datos">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password"
                            id="Contraseña"
                            name="Contraseña"
                            required/>
                </div>
                <div class="Input-datos">
                    <label for="ConfirmarContraseña">Confirmar contraseña</label>
                    <input type="password"
                            id="ConfirmarContraseña"
                            name="ConfirmarContraseña"
                            required/>
                </div>
            </div>
            <div class="botones">
                <input type="radio" name="AceptaTerminos" id="AceptaTerminos" required/>
                <label for="AceptaTerminos">He leido y acepto los terminos de las politicas de seguridad y tratamiento de datos</label>
                <div class="botonC" id="crear-cuenta-boton">
                <input type="submit" value="CREAR CUENTA">
            </div>
        </div>
        </form>
    </div>
</body>
</html>