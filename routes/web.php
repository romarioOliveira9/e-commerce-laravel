<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function() {
    Session::forget('user');
    return redirect('login');
});

Route::view('/registrar','registrar');

Route::post("/login",[UsuarioController::class,'login']);
Route::post("/registrar",[UsuarioController::class,'registrar']);
Route::get("/",[ProdutoController::class,'index']);
Route::get("detalhe/{id}",[ProdutoController::class,'detalhe']);
Route::get("busca",[ProdutoController::class,'busca']);
Route::post("adicionar_ao_carrinho",[ProdutoController::class,'adicionarAoCarrinho']);
Route::get("listacarrinho",[ProdutoController::class,'listaCarrinho']);
Route::get("removercarrinho/{id}",[ProdutoController::class,'removerCarrinho']);
Route::get("ordemagora",[ProdutoController::class,'ordemAgora']);
Route::post("ordemposicao",[ProdutoController::class,'ordemPosicao']);
Route::get("minhaordens",[ProdutoController::class,'minhaOrdens']);