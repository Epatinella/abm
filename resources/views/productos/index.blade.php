@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
    Bienvenido a la pagina principal de productos:
    <br> <a href="{{route('productos.create')}}"> -> Crear producto <-</a>
    <br> <a href="{{route('productos.list')}}"> -> Ver productos <-</a>
@endsection