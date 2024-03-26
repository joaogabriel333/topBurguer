<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoControler extends Controller
{
    public function index(){
        $produtos = Produto::all();

        $produtosComImagem = $produtos->map(function($produto){
            return [
                'nome' => $produto->nome,
                'preco' => $produto->preco,
                'ingredientes' => $produto->ingredientes,
                'imagem' => asset('storage/' . $produto->imagem),
            ];
        });
        return response ()->json($produtosComImagem);
    }
}
