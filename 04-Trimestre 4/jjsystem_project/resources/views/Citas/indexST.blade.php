@extends('layouts/template')

@section('title','Citas')

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
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('Citas.create') }}" class="btn-citas btn-primary">Citas de Analisis</a>
                            <a href="" class="btn-citas btn-primary">Citas de Mantenimiento</a>
                            <a href="" class="btn-citas btn-primary">Citas de Instalacion</a>
                        </div>
                    </section>
                    <div class="titulo-reporte">
                        <h4>Reportes : </h4>
                    </div>
                    <section class="container-reportes">
                        
                        <div class="reporte">
                            <h5>Reporte#00000</h4>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h4>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h5>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h4>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h4>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h5>
                            <h6>Nombre del tecnico</h6>
                        </div>
                        <div class="reporte">
                            <h5>Reporte#00000</h4>
                            <h6>Nombre del tecnico</h5>
                        </div>
                        <div class="estado-reportes">
                            <button class="boton-estado">Leidos</>
                            <button class="boton-estado">No leidos</>
                            
                        </div>

                    </section>
                </div>
            </div>
        </div>
