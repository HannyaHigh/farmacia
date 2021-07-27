<?php

use App\Http\Controllers\clientController;
use App\Http\Controllers\clientesController;
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
