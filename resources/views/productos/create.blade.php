@extends('layouts.plantilla')

@section('title', 'Crea tus productos')

@section('content')
    Aqui puedes crear tus productos...
    
    <form action="{{route('productos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <input type="text" name="nombre" required> <br>
        </label>
        <label>
            Precio:
            <input type="number" name="precio" required> <br>
        </label>
        <label>
            Descripcion:
            <textarea type="text" name="descripcion" required></textarea> <br>
        </label>
        <button type="submit">Crear</button>
    </form>
@endsection