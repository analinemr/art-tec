<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;

class ArtesaoController extends Controller
{

    public function welcome()
    {
        $artesaos = Artesao::orderBy('nome')->get();
        $postagem = Postagem('imagens')->get(); XXXXX

        return view('welcome', compact('artesaos', 'postagens'));
    }


    // Página principal de artesãos
    public function index()
    {
        $artesaos = Artesao::orderBy('nome', 'ASC')->get();
        return view('artesao.artesao_index', compact('artesaos'));
    }

    // Criar novo artesão
    public function create()
    {
        return view('artesao.artesao_create');
    }

    // Salvar artesão
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O nome do artesão é um campo obrigatório!',
            'nome.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 10 caracteres.',
            'nome.unique' => 'Já existe um artesão com esse nome.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5|max:10|unique:artesaos,nome',
        ], $messages);

        $artesao = new Artesao();
        $artesao->nome = $request->nome;
        $artesao->save();

        return redirect()->route('artesao.index')->with('success', 'Artesão cadastrado com sucesso!');
    }

    // Visualizar artesão
    public function show(string $id)
    {
        $artesao = Artesao::find($id);
        return view('artesao.artesao_show', compact('artesao'));
    }

    // Editar artesão
    public function edit(string $id)
    {
        $artesao = Artesao::find($id);
        return view('artesao.artesao_edit', compact('artesao'));
    }

    // Atualizar artesão
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $artesao = Artesao::find($id);
        $artesao->nome = $request->nome;
        $artesao->save();

        return redirect()->route('artesao.index')->with('message', 'Artesão atualizado com sucesso!');
    }

    // Excluir artesão
    public function destroy(string $id)
    {
        $artesao = Artesao::find($id);
        $artesao->delete();

        return redirect()->route('artesao.index')->with('message', 'Artesão excluído com sucesso!');
    }
}
