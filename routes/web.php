<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartidoController;

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



//ruta principal
Route::get('/', HomeController::class)->name('home');
Route::view('nosotros','nosotros')->name('nosotros');


//rutas equipos

Route::get('equipos',[TeamController::class,'index'])->name('equipos.index'); 

Route::post('equipos',[TeamController::class,'store'])->name('equipos.store'); 

Route::get('equipos/create', [TeamController::class,'create'])->name('equipos.create');    

Route::get('equipos/{equipo}',[TeamController::class,'show'])->name('equipos.show'); 

Route::get('equipos/{equipo}/edit',[TeamController::class,'edit'])->name('equipos.edit'); 

Route::put('equipos/{equipo}',[TeamController::class,'update'])->name('equipos.update'); 

Route::delete('equipos/{equipo}',[TeamController::class,'destroy'])->name('equipos.destroy'); 
   


//rutas partidos

Route::get('partidos',[PartidoController::class,'index'])->name('partidos.index'); 

Route::post('partidos',[PartidoController::class,'store'])->name('partidos.store');  
   
Route::get('partidos/create',[PartidoController::class,'create'])->name('partidos.create');

Route::get('partidos/{id}',[PartidoController::class,'show'])->name('partidos.show');

Route::get('partidos/{partido}/edit',[PartidoController::class,'edit'])->name('partidos.edit'); 

Route::put('partidos/{partido}',[PartidoController::class,'update'])->name('partidos.update'); 

Route::delete('partidos/{partido}',[PartidoController::class,'destroy'])->name('partidos.destroy'); 