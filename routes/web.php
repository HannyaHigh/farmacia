<?php

use App\Http\Controllers\carritofarmaciaController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\farmacosController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// PAGINA DE INICIO------------------------
Route::name('index')->get('index', [clientController::class, 'index']);


// PAGINA DE VENDEDORES-------------------------
route::get('vendedores', [clientController::class, 'vendedores'])->name('vendedores');
Route::name('guardarVendedor')->post('guardarVendedor', [clientController::class, 'guardarVendedor']);
                    // REPORTES
route::get('reportevendedores', [clientController::class, 'reportevendedores'])->name('reportevendedores');

// PAGINA DE CLIENTES-------------------------------
route::get('clientes', [clientesController::class, 'clientes'])->name('clientes');
Route::name('guardarCliente')->post('guardarCliente', [clientesController::class, 'guardarCliente']);
                    // REPORTES
route::get('reporteclientes', [clientesController::class, 'reporteclientes'])->name('reporteclientes');

// ---------------CARRITO
route::get('productos', [carritofarmaciaController::class, 'productos'])->name('productos');
route::get('carrito', [carritofarmaciaController::class, 'carrito'])->name('carrito');
Route::name('agregar')->get('agregar/{id}',[carritofarmaciaController::class,'agregar']);
Route::name('actualizar')->patch('actualizar',[carritofarmaciaController::class,'actualizar']);
Route::name('borrar')->delete('borrar',[carritofarmaciaController::class,'borrar']);


// -----------ALTA FARMACOS
route::get('farmaceuticos', [farmacosController::class, 'farmaceuticos'])->name('farmaceuticos');
Route::name('guardarFarmacos')->post('guardarFarmacos', [farmacosController::class, 'guardarFarmacos']);