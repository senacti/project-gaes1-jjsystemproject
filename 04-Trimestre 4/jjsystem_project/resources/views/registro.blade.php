<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('CSS/FormulariosStyle.css')}}">
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
                  <!--Parte uno-->
                    <div class="parte1">
                      <div class="Datos">
                        <div class="Input-datos-formularios">
                            <label>Nombre</label>
                            <input type="text" id="Nombre" name="Nombre" required/>
                            <label >Apellido</label>
                            <input type="text" id="Apellido" name="Apellido" required/>
                            <label>Numero de teléfono</label>
                            <input type="number" id="NumeroTelefono" name="NumeroTelefono" required max=""/>
                            <label>Email</label>
                            <input type="email" class="input" name="email*">
                            <label >Tipo Documento</label>
                            <select name="TipoDoc" required>
                                <option value="selecciona" class="selecciona">Selecciona</option>
                                <option value="Cedula de ciudadania"class="selecciona">Cedula de ciudadania</option>
                                <option value="Pasaporte"class="selecciona">Pasaporte</option>
                                <option value="NIT"class="selecciona">NIT</option>
                            </select>
                            <label for="NumeroDocumento">Numero de documento</label>
                            <input type="number" id="NumeroDocumento"name="NumeroDocumento" required/>
                            <div class="botonC" id="Continuar">
                              <input type="submit" value="Continuar" >
                            </div>
                            <div class="login-registrar">
                              <a id="login" href="#">Iniciar Sesion</a></li>
                          </div>
                          </div>
                        </div>
                      </div>
                      <!--Parte dos-->
                      <div class="Parte2" id="parte-2">
                            <div class="Datos">
                              <div class="Input-datos-formularios">
                                <label>Contraseña</label>
                                <input type="password" class="input" required id="password1">
                                <label >Confirmar contraseña</label>
                                <input type="password"id="ConfirmarContraseña" name="ConfirmarContraseña"required/>
                          
                              <div class="check-botton">
                                <input type="radio" name="AceptaTerminos" id="AceptaTerminos" required/>
                                <label >Acepto los terminos y condiciones. </label>
                              </div>  
                                <div class="botonC">  
                                  <input type="submit" value="Registrarse" id="link-registrarse">
                                </div >
                              </div>
                          </div>
                      </div>    
                </form>
            </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="../../JavaScript/formulariosLaravel.js"></script>

  </body>
</html>