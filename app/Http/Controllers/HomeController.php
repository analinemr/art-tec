<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
    {
        $artesaos = Artesao::all(); // ou algum filtro
        $postagens = Postagem::with('imagens')->latest()->take(6)->get(); // com imagens se houver relação

        return view('home', compact('artesaos', 'postagens'));
    }
}
