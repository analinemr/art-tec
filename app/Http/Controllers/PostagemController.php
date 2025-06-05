<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;
use App\Models\Postagem;

class PostagemController extends Controller
{
    // Página principal de postagem
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->paginate(10); // 10 por página
        return view('postagem.postagem_index', compact('postagens'));
    }

    // Criar nova postagem
    public function create()
    {
        $artesaos = Artesao::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_create', compact('artesaos'));
    }

    // Salvar nova postagem
    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'O título é um campo obrigatório!',
            'descricao.required' => 'A descrição é obrigatória!',
            'artesao_id.required' => 'Selecione um artesão!',
        ];

        $validated = $request->validate([
            'artesao_id' => 'required|exists:artesaos,id',
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

    // Visualizar postagem
    public function show(string $id)
    {
        $postagem = Postagem::findOrFail($id);
        return view('postagem.postagem_show', compact('postagem'));
    }

    // Editar postagem
    public function edit(string $id)
    {
        $postagem = Postagem::findOrFail($id);
        $artesaos = Artesao::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_edit', compact('postagem', 'artesaos'));
    }

    // Atualizar postagem
    public function update(Request $request, string $id)
    {
        $messages = [
            'titulo.required' => 'O título é um campo obrigatório!',
            'descricao.required' => 'A descrição é obrigatória!',
            'artesao_id.required' => 'Selecione um artesão!',
        ];

        $validated = $request->validate([
            'artesao_id' => 'required|exists:artesaos,id',
            'titulo' => 'required|min:5',
            'descricao' => 'required',
        ], $messages);

        $postagem = Postagem::findOrFail($id);
        $postagem->artesao_id = $request->artesao_id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem atualizada com sucesso!');
    }

    // Deletar postagem
    public function destroy(string $id)
    {
        $postagem = Postagem::findOrFail($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('message', 'Postagem excluída com sucesso!');
    }
}
