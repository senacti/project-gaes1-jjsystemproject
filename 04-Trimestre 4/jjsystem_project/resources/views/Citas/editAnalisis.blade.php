@extends('layout/template')

@section('title','Editar | Cita Analisis')

@section('contenido')

<div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h2 class="text-light font-weight-bold">J.J System</h2>
            </div>
                <div class="menu">
                    <a href="#" class="d-block text-light font-weight-light">Inicio</a>
                    <a href="#" class="d-block text-light font-weight-light">Productos y Servicios</a>
                    <div class="a-selected">
                        <a href="#" class="d-block text-light font-weight-light">Servicio Tecnico</a>                    
                    </div> 
                    <a href="#" class="d-block text-light font-weight-light">Envios</a>
                    <a href="#" class="d-block text-light font-weight-light">PQRSF</a>
                    <a href="#" class="d-block text-light font-weight-light">Clientes</a>
                    <a href="#" class="d-block text-light font-weight-light">Tecnicos</a>
                    <a href="#" class="d-block text-light font-weight-light">Ajustes</a>
                </div>
            </div>
            
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <h4 class="greetings">Hola, Yoanny</h4>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto profile">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/fotoperfil.png')}}" class="img-fluid rounded-circle avatar mr-2" alt="Foto de perfil">
                                Joanny Lopez
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Mi perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                            </li>
                        </ul>
                        </div>
                </nav>

                <div id="content">
                    <section class="available_prod">
                        <div class="container">
                            <div class="row">
                                <div class="allowed_prod">
                                    <h2 class="font-weight-bold">Editar Citas de analisis</h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="container-citas">
                        
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar cita </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <form action="{{url('Citas/'.$cita->idCita)}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="fecha" class="col-form-label">Fecha:</label>
                                            <input type="date" class="form-control" name="fechaCita" id="fechaCita" value="{{ $cita->fechaCita }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Direccion" class="col-form-label">Direccion:</label>
                                            <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $cita->direccion }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactoCliente" class="col-form-label">Numero contacto del cliente:</label>
                                            <input type="number" class="form-control" name="contactoCliente" id="contactoCliente" value="{{ $cita->contactoCliente }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcionCita" class="col-form-label">Descripcion :</label>
                                            <textarea class="form-control" name="descripcionCita" id="descripcionCita" value="{{ $cita->descripcionCita }}" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="idTecnico" class="col-form-label">idTecnico:</label>
                                            <input type="number" class="form-control" name="idTecnico" id="idTecnico" value="{{ $cita->idTecnico }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-cancelar btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-create btn-success">Aceptar</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
