<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoControler;
use Database\Seeders\ProdutoSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoControler::class, 'ListaProduto']);
Route::post('/produtos', [ProdutoControler::class, 'CadastrarProduto']);

Route::get('/cliente', [   ClienteController::class, 'ListaCliente']);
Route::post('/cliente', [  ClienteController::class, 'cadastrarCliente']);
