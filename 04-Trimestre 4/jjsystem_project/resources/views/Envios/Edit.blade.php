<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Envio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
@auth
    @if (Auth::User()->idRol == 1)
    <main>
        <div class="container py-4">
            <h2> Editar Envio </h2>

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
            <form action="{{ url('envios/' .$envio->idEnvio )}}" method="post">
                @method("PUT")
                @csrf

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label"> Dirección: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $envio->direccion }}" Required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="idtecnico" class="col-sm-2 col-form-label"> ID Tecnico: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="idtecnico" id="idtecnico" value="{{ $envio -> idTecnico }}" Required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="estado" class="col-sm-2 col-form-label"> Estado Envio: </label>
                    <div class="col-sm-5">
                        <select name="estado" id="estado" class="form-select" Required>
                            <option value="">Seleccione el estado</option>
                            @foreach($estados as $estado)
                            <option value="{{ $estado -> idEstadoEnvio}}" @if ($estado -> idEstadoEnvio == $envio->	EstadoEnvio_idEstadoEnvio ) {{'selected'}} @endif>{{ $estado -> nombreEstadoEnvio}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <a href="{{ url('envios')}}" class="btn btn-secondary"> Regresar </a>
                <button type="submit" class="btn btn-success"> Guardar </button>
            </form>
        </div>
    </main>
    @else
        <div class="alert alert-warning"> 
            No tienes permisos para ver este contenido. Por favor, contáctate con el administrador si necesitas acceso.
        </div> 
    @endif
@else
    <div class="alert alert-info">
        Para ver este contenido, por favor <a href="{{ route('login') }}">inicia sesión</a> o <a href="{{ route('register') }}">regístrate</a>.
    </div>
@endauth
</body>
</html>
