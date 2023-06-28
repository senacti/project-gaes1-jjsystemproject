<link rel="stylesheet" href="{{asset('css/añadir_producto.css')}}">

@extends('layout/ptemplate')

@section('title', 'Añadir Productos')

@section('content')
<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <a href="{{url('Productos')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>