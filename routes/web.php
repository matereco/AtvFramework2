<?php

use Illuminate\Support\Facades\Route;
//use  App\Http\Controllers\ProdutosController;
use  App\Http\Controllers\VendasController;
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
Route::get('/vendas', [VendasController::class, 'listarVendas']);
Route::get('/vendas/ver/{id}', [VendasController::class, 'verVenda']);
Route::get('/vendas/nova/{produto}/{preco}/{quantidade}', [VendasController::class, 'cadastrarVenda']);
Route::get('/vendas/atualizar/{id}/{produto}/{preco}/{quantidade}', [VendasController::class, 'atualizarVenda']);
Route::get('/vendas/excluir/{id}', [VendasController::class, 'excluirVenda']);

//Route::get('/{estado?}', [ProdutosController::class, 'index']);
/*
Route::get('/novos', function () {
    return view('welcome');
});Route::get('/usados', function () {
    return view('welcome');
});
Route::get('/veiculos/{fabricante}', [VeiculosController::class, 'index']);
*/
