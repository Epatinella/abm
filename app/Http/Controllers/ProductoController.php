<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }
    public function create(){
        return view('productos.create');
    }
    public function update($id){
        $producto = Producto::find($id);
        return view('productos.update', compact('producto'));
    }
    
    public function show($id){
        $producto = Producto::find($id); 
        return view('productos.show', compact('producto'));; //en el segundo campo pasamos la variable
    }

    public function list(){
        $productos = Producto::paginate(); //no trae todos los productos, solo los primeros 15 y para ver los proximos 15 deberiamos ir a otra pagina
        return view('productos.list',compact('productos')); //en el segundo campo pasamos la variable
    }

    public function store(Request $request){
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect()->route('productos.index');
    }

    public function updating(Request $request, Producto $producto){
        
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        
        $producto->save(); //guardamos los datos en la base de datos
        
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.list');
    }
}
