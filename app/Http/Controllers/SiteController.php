<?php

namespace App\Http\Controllers;

use App\Models\Artesao;
use App\Models\Postagem;

class SiteController extends Controller
{
    // Método para a página principal
    public function index()
    {
        $artesaos = Artesao::orderBy('nome')->paginate(3);
        $postagens = Postagem::orderBy('titulo')->paginate(3);

        return view('welcome', compact('artesaos', 'postagens'));
    }

    // Método para mostrar postagens por artesão (exemplo)
    public function PostagemByArtesaoId($id)
    {
        $postagens = Postagem::where('artesao_id', $id)->get();
        return view('postagem.index', compact('postagens'));
    }

    // Método para mostrar postagens por autor (exemplo)
    public function PostagemByAutorId($id)
    {
        $postagens = Postagem::where('user_id', $id)->get();
        return view('postagem.index', compact('postagens'));
    }
}
