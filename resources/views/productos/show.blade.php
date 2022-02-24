@extends('layouts.plantilla')

@section('title', 'Producto')

@section('content')
    <h1>Producto:</h1>
    Nombre: {{$producto->nombre}} <br>
    Precio: {{$producto->precio}} <br>
    Descripcion: {{$producto->descripcion}} <br>
    <a href="{{route('productos.update', $producto->id)}}"> modificar </a>
    <form action="{{route('productos.destroy',$producto)}}" method="POST">

        @csrf

        @method('delete')
        
        <button type="submit">Eliminar</button>
    </form>

@endsection