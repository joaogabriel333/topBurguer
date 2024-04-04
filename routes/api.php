<?php

use App\Http\Controllers\ProdutoControler;
use Database\Seeders\ProdutoSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoControler::class, 'index']);
Route::post('/produtos', [ProdutoControler::class, 'store']);
