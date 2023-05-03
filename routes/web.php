<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProyectoController;
use App\Http\controllers\UsuarioController;
use App\Http\controllers\TareaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyectos', [ProyectoController::class,'index'])
    ->name('raizproyecto');


Route::get('/proyectos/{id}', [ProyectoController::class,'show'])
    ->name('proyecto.show')->where('id', '[0-9]+');


Route::get('/proyectos/crear', [ProyectoController::class,'create'])
    ->name('proyecto.create');


Route::post('/proyectos/crear', [ProyectoController::class,'store'])
    ->name('proyecto.store');


Route::get('/proyectos/{id}/editar', [ProyectoController::class, 'edit'])
    ->name('proyecto.edit')->where('id', '[0-9]+');

Route::put('/proyectos/{id}/editar', [ProyectoController::class,'update'])
    ->name('proyecto.update')->where('id', '[0-9]+');


Route::delete('/proyectos/{id}/borrar', [ProyectoController::class,'destroy'])
    ->name('proyecto.destroy')->where('id', '[0-9]+');


   //*************************************************************************************************************

   //rutas usuarios
   Route::get('/usuarios', [UsuarioController::class,'index'])
    ->name('raizusuario');


Route::get('/usuarios/{id}', [UsuarioController::class,'show'])
    ->name('usuario.show')->where('id', '[0-9]+');


Route::get('/usuarios/crear', [UsuarioController::class,'create'])
    ->name('usuario.create');


Route::post('/usuarios/crear', [UsuarioController::class,'store'])
    ->name('usuario.store');


Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])
    ->name('usuario.edit')->where('id', '[0-9]+');

Route::put('/usuarios/{id}/editar', [UsuarioController::class,'update'])
    ->name('usuario.update')->where('id', '[0-9]+');


Route::delete('/usuarios/{id}/borrar', [UsuarioController::class,'destroy'])
    ->name('usuario.destroy')->where('id', '[0-9]+');
   

     //*************************************************************************************************************

   //rutas tareas
   Route::get('/tareas', [TareaController::class,'index'])
   ->name('raiztarea');


Route::get('/tareas/{id}', [TareaController::class,'show'])
   ->name('tarea.show')->where('id', '[0-9]+');


Route::get('/tareas/crear', [TareaController::class,'create'])
   ->name('tarea.create');


Route::post('/tareas/crear', [TareaController::class,'store'])
   ->name('tarea.store');


Route::get('/tareas/{id}/editar', [TareaController::class, 'edit'])
   ->name('tarea.edit')->where('id', '[0-9]+');

Route::put('/tareas/{id}/editar', [TareaController::class,'update'])
   ->name('tarea.update')->where('id', '[0-9]+');


Route::delete('/tareas/{id}/borrar', [TareaController::class,'destroy'])
   ->name('tarea.destroy')->where('id', '[0-9]+');
  