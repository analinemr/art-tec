<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Inclui o model de artesão
use App\Models\Artesao;
//Inclui o model de postagem
use App\Models\Postagem;

class PostagemController extends Controller
{
    //Página principal de postagem
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view('postagem.postagem_index', compact('postagens'));
    }

    //Criar nova postagem
    public function create()
    {
        $artesaos = Artesao::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_create', compact('artesaos'));
    }

    //Salvar nova postagem
    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'artesao_id' => 'required',
            'titulo' => 'required|min:5',
            'descricao' => 'required',
        ], $messages);

        $postagem = new Postagem();
        $postagem->artesao_id = $request->artesao_id;
        $postagem->user_id = auth()->user()->id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem cadastrada com sucesso!');
    }

    //Visualizar postagem
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.postagem_show', compact('postagem'));
    }

    //Editar postagem
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        $artesaos = Artesao::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_edit', compact('postagem', 'artesaos'));
    }

    //Atualizar postagem
    public function update(Request $request, string $id)
    {
        $messages = [
            'titulo.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'artesao_id' => 'required',
            'titulo' => 'required|min:5',
            'descricao' => 'required',
        ], $messages);

        $postagem = Postagem::find($id);
        $postagem->artesao_id = $request->artesao_id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem atualizada com sucesso!');
    }

    //Excluir postagem
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('message', 'Postagem excluída com sucesso!');
    }
}
