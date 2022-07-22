<?php

namespace App\Http\Controllers;

use App\Models\Ordem;
use App\Models\Produto;
use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{
    function index()
    {
        $data = Produto::all();

        return view('produto', ['produto' => $data]);
    }

    function detalhe($id)
    {
        $data = Produto::find($id);
        return view('detalhe', ['produto' => $data]);
    }

    function busca(Request $req)
    {
        $data = Produto::where('nome', 'like', '%' . $req->input('query') . '%')->get();
        return view('busca', ['produto' => $data]);
    }

    function adicionarAoCarrinho(Request $req)
    {
        if ($req->session()->has('usuario')) {
            $carrinho = new Carrinho;
            $carrinho->usuario_id = $req->session()->get('usuario')['id'];
            $carrinho->produto_id = $req->produto_id;
            $carrinho->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    function carritnhoItem()
    {
        $usuarioId = Session::get('usuario')['id'];
        return Carrinho::where('usuario_id', $usuarioId->count());
    }

    function listaCarrinho()
    {
        $usuarioId = Session::get('usuario')['id'];
        $produtos = DB::table('carrinho')
            ->join('produtos', 'carrinho.produto_id', '=', 'produtos.id')
            ->where('carrinho.usuario_id', $usuarioId)
            ->select('produtos.*', 'carrinho.id as carrinho_id')
            ->get();

        return view('listacarrinho', ['produtos' => $produtos]);
    }

    function removerCarrinho($id)
    {
        Carrinho::destroy($id);
        return redirect('listacarrinho');
    }

    function ordemAgora()
    {
        $usuarioId = Session::Get('usuario')['id'];
        $total = DB::table('carrinho')
            ->join('produtos', 'carrinho.produto_id', '=', 'produtos.id')
            ->where('carrinho.usuario_id', $usuarioId)
            ->sum('produtos.preco');

        return view('ordemagora', ['total' => $total]);
    }

    function ordemPosicao(Request $req)
    {
        $usuarioId = Session::get('usuario')['id'];
        $todoCarrinho = Carrinho::where('usuario_id', $usuarioId)->get();
        foreach ($todoCarrinho as $carrinho) {
            $ordem = new Ordem;
            $ordem->produto_id = $carrinho['produto_id'];
            $ordem->usuario_id = $carrinho['usuario_id'];
            $ordem->status = "pending";
            $ordem->metodo_pagamento = $req->pagamento;
            $ordem->metodo_status = "pending";
            $ordem->endereco = $req->endereco;
            $ordem->save();
            $todoCarrinho = Carrinho::where('usuario_id', $usuarioId)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function minhaOrdens()
    {
        $usuarioId = Session::get('usuario')['id'];
        $ordens = DB::table('ordem')
            ->join('produtos', 'ordem.produto_id', '=', 'produtos.id')
            ->where('ordem.usuario_id', $usuarioId)
            ->get();

        return view('minhaordens', ['orderns' => $ordens]);
    }
}
