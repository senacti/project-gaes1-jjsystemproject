@auth
    @if (Auth::User()->idRol == 1)
@extends('layout/template')

@section('title','Citas')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2> Registrar Envio </h2>

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
            <form action="{{ url('envios')}}" method="post">

                @csrf

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label"> Dirección: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old ('matricula')}}" Required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="idtecnico" class="col-sm-2 col-form-label"> ID Tecnico: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="idtecnico" id="idtecnico" value="{{ old ('idtecnico')}}" Required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="estado" class="col-sm-2 col-form-label"> Estado Envio: </label>
                    <div class="col-sm-5">
                        <select name="estado" id="estado" class="form-select" Required>
                            <option value="">Seleccione el estado</option>
                            @foreach($estados as $estado)
                            <option value="{{ $estado -> idEstadoEnvio}}">{{ $estado -> nombreEstadoEnvio}}</option>
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