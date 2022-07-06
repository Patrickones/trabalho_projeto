<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\StatusPedController;
use App\Http\Controllers\VendedoresController;
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



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');

    })->name('home');
    
 
    Route::get('/usuarios', [UsuariosController::class,'lista']);
    Route::get('/usuarios-add', [UsuariosController::class,'add']);

    Route::get('/clientes-add', [ClientesController::class,'add']);
    Route::get('/clientes', [ClientesController::class,'lista']);
    
    Route::get('/fornecedores', [FornecedoresController::class,'lista']);
    Route::get('/fornecedores-add', [FornecedoresController::class,'add']);

    Route::get('/vendedores-add', [VendedoresController::class,'add']);
    Route::get('/vendedores', [VendedoresController::class,'lista']);

    Route::get('/produtos-add', [ProdutosController::class,'add']);
    Route::post('/produtos-save', [ProdutosController::class,'save']);
    Route::get('/produtos', [ProdutosController::class,'lista']);
    

    Route::get('/fornecedores-edit/{id}', [FornecedoresController::class, 'edit']);
    Route::post('/fornecedores-save/{id?}', [FornecedoresController::class, 'save']);
    Route::get('/fornecedores-delete/{id}', [FornecedoresController::class, 'delete']);

    Route::get('/clientes-edit/{id}', [ClientesController::class, 'edit']);
    Route::post('/clientes-save/{id?}', [ClientesController::class, 'save']);
    Route::get('/clientes-delete/{id}', [ClientesController::class, 'delete']);

    Route::get('/vendedores-edit/{id}', [VendedoresController::class, 'edit']);
    Route::post('/vendedores-save/{id?}', [VendedoresController::class, 'save']);
    Route::get('/vendedores-delete/{id}', [VendedoresController::class, 'delete']);

    Route::get('/statusped-edit/{id}', [StatusPedController::class, 'edit']);
    Route::post('/statusped-save/{id?}', [StatusPedController::class, 'save']);
    Route::get('/statusped-delete/{id}', [StatusPedController::class, 'delete']);

    Route::get('/categorias-edit/{id}', [CategoriasController::class, 'edit']);
    Route::post('/categorias-save/{id?}', [CategoriasController::class, 'save']);
    Route::get('/categorias-delete/{id}', [CategoriasController::class, 'delete']);
    Route::get('/categorias', [CategoriasController::class,'lista']);

});


