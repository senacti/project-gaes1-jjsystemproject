<link rel="stylesheet" href="{{asset('css/añadir_producto.css')}}">

@extends('layout/ptemplate')

@section('title', 'Editar Producto')

@section('content')

<div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
        <div class="logo">
            <h2 class="text-light font-weight-bold">J.J System</h2>
        </div>
            <div class="menu">
                <a href="{{asset('home_admin')}}" class="d-block text-light font-weight-light">Inicio</a>
                <div class="a-selected">
                    <a href="{{asset('gestion_productos')}}" class="d-block text-light font-weight-light">Productos y Servicios</a>
                </div>                    
                <a href="#" class="d-block text-light font-weight-light">Servicio Tecnico</a>
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
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        </li>
                    </ul>
                    </div>
            </nav>

            <div id="content">

                @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

            <form action="{{ url('Productos/'.$Producto->id)}}" method="POST">
                
                @method("PUT")
                @csrf

                <div class="form-group">
                    <div class="form-title">
                        <h3 class="font-weight-bold">Añadir producto</h3>
                    </div>
                    <div class="form-content">
                        <label for="nombreProducto">Nombre</label>
                        <input type="text" id="nombreProducto" name="nombreProducto" placeholder="Nombre" value="{{$Producto->nombreProducto('nombreProducto')}}" required>
                    </div>
                    <div class="form-content">
                        <label for="precioProducto">Precio</label>
                        <input type="number" id="precioProducto" name="precioProducto" placeholder="Precio" value="{{$Producto->precioProducto('precioProducto')}}">
                    </div>
                    <div class="form-content">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$Producto->cantidad('cantidad')}}" required>
                    </div>
                    <div class="form-content">
                        <label for="categoriaProducto">Categoria</label>
                        <select name="categoriaProducto" id="categoriaProducto" class="form-select" required>
                            <option value="">Seleccionar Categoria</option>
                            @foreach($categoriaProductos as $categoriaProducto)
                            <option value="{{$categoriaProducto->id}}" @if($categoriaProducto->id == $Producto->idCategoriaProducto) {{'selected'}} @endif>{{$categoriaProducto->nombreCategoria}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-content">
                        <label for="proveedorProducto">Proveedor</label>
                        <select name="proveedorProducto" id="proveedorProducto" class="form-select" required>
                            <option value="">Seleccionar Proveedor</option>
                            @foreach($proveedorProductos as $proveedorProducto)
                            <option value="{{$proveedorProducto->id}}" @if($proveedorProducto->id == $Producto->idProveedorProducto) {{'selected'}} @endif>{{$proveedorProducto->nombreProveedor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-content">
                        <label for="descripcionProducto">Descripción</label>
                        <textarea name="descripcionProducto" id="descripcionProducto" cols="30" rows="10" placeholder="Descripción" value="{{$Producto->descripcionProducto('descripcionProducto')}}" required></textarea>
                    </div>
                        <button type="submit" class="btn btn-create btn-success">Confirmar</button>
                    </div>
                </div>
            </form>
@endsection