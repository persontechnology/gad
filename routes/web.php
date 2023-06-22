<?php

use App\Http\Controllers\AutoridadController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TransparenciaController;
use App\Http\Controllers\WelcomeController;
use App\Models\Noticia;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/noticias', [WelcomeController::class,'noticias'])->name('noticias');
Route::get('/noticias-detalle/{id}', [WelcomeController::class,'noticiasDetalle'])->name('noticias-detalle');
Route::get('/mision-y-vision', [WelcomeController::class,'misionvision'])->name('misionvision');
Route::get('/transparencia-rendicion-cuentas/{anio}', [WelcomeController::class,'transparencia'])->name('transparencia');
Route::get('/contacto', [WelcomeController::class,'contacto'])->name('contacto');
Route::post('/enviar-contacto', [WelcomeController::class,'contactoEnviar'])->name('contactoEnviar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('empresa', EmpresaController::class)->middleware(['auth']);
Route::resource('slider', SliderController::class)->middleware(['auth']);
Route::resource('autoridad', AutoridadController::class)->middleware(['auth']);
Route::resource('noticias-admin', NoticiaController::class)->middleware(['auth']);
Route::post('noticias-categoria-guardar', [NoticiaController::class,'guardarCategoria'])->name('noticias-categoria-guardar')->middleware(['auth']);
Route::resource('transparencia-admin', TransparenciaController::class)->middleware(['auth']);

Route::post('guardar-archivo-transparencia', [TransparenciaController::class,'guardarArchivo'])->name('guardar-archivo-transparencia')->middleware(['auth']);
Route::post('eliminar-archivo-transparencia/{id}', [TransparenciaController::class,'eliminarArchivo'])->name('eliminar-archivo-transparencia')->middleware(['auth']);





