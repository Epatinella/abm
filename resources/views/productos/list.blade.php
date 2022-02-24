@extends('layouts.plantilla')

@section('title', 'Lista de productos')

@section('content')
    <h1>Productos actuales:</h1>
    <a href="{{route('productos.index')}}"> -> Pagina principal <-</a>
    <u1>
        @foreach ($productos as $producto)
            <li>{{$producto->nombre}} - $ {{$producto->precio}} <a href="{{route('productos.show', $producto->id)}}"> ---> Ver producto <--- </a>
        @endforeach
    </u1>
    {{$productos->links()}}
@endsection