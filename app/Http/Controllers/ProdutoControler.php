<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoForRequest;
use App\Http\Requests\ProdutoFromRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoControler extends Controller
{
    public function ListaProduto()
    {
        $produtos = Produto::all();
        $produtosComImagem = $produtos->map(function ($produto) {
            return [
                'id' => $produto->id,
                'nome' => $produto->nome,
                'ingredientes' => $produto->ingredientes,
                'preco' => $produto->preco,
                'imagem' => asset('storage/' .  $produto->imagem),
            ];
        });
        return response()->json($produtosComImagem);
    }
    public function CadastrarProduto(ProdutoFromRequest $request)
    {
        $produtoData = $request->all();
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/produtos', $nomeImagem, 'public');
            $produtoData['imagem'] = $caminhoImagem;
        }
        $produto = Produto::create($produtoData);
        return response()->json(['produto' => $produto], 201);
    }
}