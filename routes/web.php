<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConfigController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::view('/', 'home');
Route::view('/nwthome', 'nwt');

Route::prefix('/')->group(function(){

    Route::get('/', [ConfigController::class, 'home'])->name('raiz'); //listar as antenas

    Route::get('/cadastrar', [ConfigController::class, 'novos'])->name('cadastrar.get'); //adicionar
    Route::post('/cadastrar', [ConfigController::class, 'novosPost']); //adicionar
    

    Route::get('/editar/{id}', [ConfigController::class, 'editar'])->name('editar.get');
    Route::post('/editar/{id}', [ConfigController::class, 'editarpost']);   

    Route::get('/deletar/{id}', [ConfigController::class, 'deletar'])->name('deletar.get');
    

    
});

Route::get('/del/{id}', [ConfigController::class, 'del'])->name('delpost');





//####################### #################################//
Route::get('/noticia/{id}', function($id){
    echo "noticia boa ".$id;
});

Route::get('/nota/{name}', function($name){
    echo "Mostrando nota do equipamento ".$name;   //expressão regular
})->where('name', '[a-z]+');

Route::get('/nota/{id}', function($id){
    echo "Mostrando nota do equipamento ".$id;
})->where('id', '[0-9]+');

Route::get('/nota/{id}/info', function($id){
    echo "esse equipamento está no sitio torezani";
})->where('id', '[0-9]+');

