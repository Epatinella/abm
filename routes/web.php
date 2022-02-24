<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(ProductoController::class)->group(function(){
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/crear', 'create')->name('productos.create');
    Route::get('productos/listar', 'list')->name('productos.list');
    Route::get('productos/mostrar/{id}', 'show')->name('productos.show');
    Route::get('productos/modificar/{id}', 'update')->name('productos.update');
    Route::post('productos','store')->name('productos.store'); // HAY 2 RUTAS CON EL MISMO NOMBRE, PERO EL METODO ES DIFERENTE POR ENDE DEPENDIENDO DEL METODO CON EL QUE SE ENVIE LA INFORMACION VA A SER EL METODO QUE VA A PROCESAR, POR LO TANTO EN EL FORMULARIO DEBERIAS UTILIZAR METODO POST PARA EJECUTAR ESTA URL
    Route::put('productos/{producto}','updating')->name('productos.updating');
    Route::delete('productos/{producto}', 'destroy')->name('productos.destroy');
});
