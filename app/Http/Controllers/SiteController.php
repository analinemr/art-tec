<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;
use App\Models\Postagem; // trocado Produto por Postagem

class SiteController extends Controller
{
    public function index()
    {
        $artesaos = Artesao::all();

        // Se Postagem tem relacionamento 'imagens', ajuste conforme o nome correto
        $postagens = Postagem::with('imagens')->get();

        return view('welcome', compact('artesaos', 'postagens'));
    }

    public function PostagemByArtesaoId($id)
    {
        $postagens = Postagem::where('artesao_id', $id)->get();
        return view('postagens.index', compact('postagens'));
    }

    public function PostagemByAutorId($id)
    {
        $postagens = Postagem::where('autor_id', $id)->get();
        return view('postagens.index', compact('postagens'));
    }
}
