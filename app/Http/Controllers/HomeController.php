<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;
use App\Models\Postagem;

class HomeController extends Controller
{
    public function index()
    {
        $artesaos = Artesao::all();
        $postagens = Postagem::latest()->paginate(6);

        return view('home', compact('artesaos', 'postagens'));
    }
}
