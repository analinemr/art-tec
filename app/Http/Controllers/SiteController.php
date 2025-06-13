<?php

namespace App\Http\Controllers;

use App\Models\Artesao;
use App\Models\Postagem;

class SiteController extends Controller
{
    // Método para a página principal
    public function index()
    {
        $artesaos_menu = Artesao::orderBy('nome')->get();
        $artesaos = Artesao::orderBy('nome')->paginate(3);
        $postagens = Postagem::orderBy('titulo')->paginate(9);

        return view('welcome', compact('artesaos', 'postagens', 'artesaos_menu'));
    }

    // Método para mostrar postagens por artesão (exemplo)
    public function PostagemByArtesaoId($id)
    {
        $artesaos_menu = Artesao::orderBy('nome')->get();
        $artesao = Artesao::find($id);
        $postagens = Postagem::where('artesao_id', $id)->get();
        return view('feed.PostagemByArtesaoId', compact('postagens', 'artesao', 'artesaos_menu'));
    }

    // Método para mostrar postagens por autor (exemplo)
    public function PostagemByAutorId($id)
    {
        $postagens = Postagem::where('user_id', $id)->get();
        return view('postagem.index', compact('postagens'));
    }
}
