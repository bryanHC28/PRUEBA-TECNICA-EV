<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\EmisoresController;
use App\Http\Controllers\ReceptoresController;
use App\Http\Controllers\Auth\LoginController;

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
 


 



Route::group(['middleware'=>'web'], function(){

    Route::get('loginss',[LoginController::class,'getLogin']);

Route::post('loginss',[LoginController::class,'postLogin']);
   
Route::get('registerss',[LoginController::class,'getRegister']);

Route::post('registerss',[LoginController::class,'postRegister']);
   


Route::get('/', function () {
    return view('welcome');
});
 

 

	});

    Route::group(['middleware'=>'auth'],function(){
       
        Route::get('cerrarsesion',[LoginController::class,'getLogout']);
    });

    

    
Route::group(['middleware'=>'usuario'],function(){
    Route::resource('usuarios',UsuariosController::class);
    Route::resource('servicios',ServiciosController::class);
    Route::resource('emisor',EmisoresController::class);
    Route::resource('receptor',ReceptoresController::class);

    Route::get('mis_servicios',[ServiciosController::class,'mis_servicios']);

});







 