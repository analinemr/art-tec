<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;
use App\Models\Postagem;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');

        $artesaos = Artesao::where('nome', 'like', "%$q%")->get();
        $postagen = Postagem::where('nome', 'like', "%$q%")
                            ->orWhere('descricao', 'like', "%$q%")
                            ->get();

        return view('search.results', compact('artesaos', 'postagens', 'q'));
    }
}
