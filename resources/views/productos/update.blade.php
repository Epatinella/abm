@extends('layouts.plantilla')

@section('title', 'Modificar producto')

@section('content')
    El producto que quiere modificar es:
    <br> Nombre: {{$producto->nombre}} 
    <br> Precio: {{$producto->precio}}
    <br> Descripcion: {{$producto->descripcion}}
    <br><br>
    <form action="{{route('productos.updating',$producto)}}" method="POST">

        @csrf

        @method('put') 

        <label>
            Nuevo nombre:
            <input type="text" name="nombre" value="{{$producto->nombre}}" required> <br>
        </label>
        <label>
            Nuevo precio:
            <input type="number" name="precio" value="{{$producto->precio}}" required> <br>
        </label>
        <label>
            Nueva descripcion:
            <textarea type="text" name="descripcion" required>{{$producto->descripcion}}</textarea> <br>
        </label>
        <button type="submit">Actualizar</button>
    </form>

@endsection