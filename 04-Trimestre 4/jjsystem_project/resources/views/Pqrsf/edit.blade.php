<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar PQRSF - J.J System</title>
    <link rel="stylesheet" href="{{asset('CSS/formulariopqrsf.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/normalize.css')}}">
    <link rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css')}}">
</head>

<body>

    <header class="header">
        
        <div class="container logo-login-container">
            
            <a href="../../HTML/Cliente_landing_page/index.html" class="logo">J.J SYSTEM</a>
            
            <nav class="login_navigation">
                <ul>
                    <li><a href="{{asset('../../HTML/formularios/registro.html')}}">Registrarse</a></li>
                    <li><a href="{{asset('../../HTML/formularios/login.html')}}">Iniciar sesión</a></li>
                    <li><a href="#"><img class="user_img" src="{{asset('../../images/ft perfil.png')}}" alt="Foto de perfil"></a></li>
                </ul>
                
            </nav>
        
        </div>
        
    </header>

    <main class="main">

        <nav class="navigation_bar">
            
            <div class="search_bar">

                <nav class="navigation_bar_logo">
                    <a href="#"><img class="navigation_img" src="{{asset('../../images/lupa.png')}}" alt="Lupa de navegación"></a>
                </nav>
                
                <nav class="navigation_bar_search_box">
                    <input type="text" class="navigation_bar_input" placeholder="buscar" required>
                </nav>
            
            </div>

            <nav class="navigation_bar_items">
                
                <ul>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    
                    <li>
                        <a href="#">Sobre nosotros</a>
                    </li>
                    
                    <li>
                        <a href="#">Contactanos</a>
                    </li>
                </ul>
            
            </nav>
        
        </nav>

        <div class="analysis_service">

            <br><h1>REGISTRAR PQRSF</h1>

            <div class="pqrsf_description">

                <p>Para nuestra empresa J.J System es muy importante conocer su opinión sobre nuestra prestación <br>
                 de servicios para poder mejorarlos continuamente, por eso queremos invitarlos a que registren <br> 
                 sus peticiones, quejas, reclamos, sugerencias y felicitaciones a través de este formulario,<br>
                 diligenciando los datos requeridos para poder responderle oportunamente.</p>

            </div>
        
        </div>

        <br><div class="container">
        <div class="first_form">

            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            @endif

            <form action="{{ url('Pqrsf/' .$pqrsf->idPQRSF) }}" method="post">
                @method("PUT")
                @csrf

              <div class="mb-3">
                <label for="fechaPQRSF" class="form-label"> Fecha</label>
                <input type="date" class="form-control" id="fechaPQRSF" value="{{ $Pqrsf->fechaPQRSF }}" Required>
              </div>
      
              <br><div class="mb-3">
                  <label for="informacionPQRSF" class="form-label"> Información Pqrsf <br>
                       Si lo considera necesario, por favor especifique servicio, productos y/o personas involucradas.</label>
                  <textarea class="form-control" id="informacionPQRSF" rows="3"></textarea>
                </div>

                <div class="mb-3 row">
                    <label for="TipoPQRSF" class="col-sm-2 col-form-label">Tipo Pqrsf</label>
                    <div class="col-sm-5">
                        <select name="TipoPQRSF" class="form-select" aria-label="Default select example">
                            @isset($tipos)
                                @foreach($tipos as $TipoPQRSF)
                                    <option value="{{$TipoPQRSF->idTipoPQRSF}}">{{$TipoPQRSF->nombreTipoPQRSF}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>    

                <div class="mb-3 row">
                    <label for="estadoPQRSF" class="col-sm-2 col-form-label">Estado Pqrsf</label>
                    <div class="col-sm-5">
                        <select name="estadoPQRSF" class="form-select" aria-label="Default select example">
                            @isset($estados)
                                @foreach($estados as $estadoPQRSF)
                                    <option value="{{$estadoPQRSF->idEstadoPQRSF}}">{{$estadoPQRSF->nombreEstadoPQRSF}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
           
    <a href="{{ url('Pqrsf/create') }}" class="btn btn-secondary">Regresar</a>
    <a href="{{ url('Pqrsf/registrospqrsf') }}" class="btn btn-secondary">Guardar</a>

</form>
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
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>