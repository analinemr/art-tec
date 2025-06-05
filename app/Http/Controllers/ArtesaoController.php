<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesao;

class ArtesaoController extends Controller
{
    public function index()
    {
        $artesaos = Artesao::orderBy('nome', 'ASC')->paginate(10);
        return view('artesao.artesao_index', compact('artesaos'));
    }

    public function create()
    {
        return view('artesao.artesao_create');
    }

    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O nome do artesão é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'nome.unique' => 'Já existe um artesão com esse nome.',
            'fotografia.image' => 'O arquivo deve ser uma imagem.',
            'fotografia.max' => 'A imagem não pode ser maior que 2MB.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5|max:100|unique:artesaos,nome',
            'biografia' => 'nullable|string',
            'email' => 'nullable|email',
            'cidade' => 'nullable|string',
            'fotografia' => 'nullable|image|max:2048',
        ], $messages);

        $artesao = new Artesao();
        $artesao->nome = $request->nome;
        $artesao->biografia = $request->biografia;
        $artesao->email = $request->email;
        $artesao->cidade = $request->cidade;

        if ($request->hasFile('fotografia')) {
            $path = $request->file('fotografia')->store('artesaos', 'public');
            $artesao->fotografia = $path;
        }

        $artesao->save();

        return redirect()->route('artesao.index')->with('success', 'Artesão cadastrado com sucesso!');
    }

    public function show($id)
    {
        $artesao = Artesao::findOrFail($id);
        return view('artesao.artesao_show', compact('artesao'));
    }

    public function edit($id)
    {
        $artesao = Artesao::findOrFail($id);
        return view('artesao.artesao_edit', compact('artesao'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'nome.required' => 'O nome do artesão é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'fotografia.image' => 'O arquivo deve ser uma imagem.',
            'fotografia.max' => 'A imagem não pode ser maior que 2MB.',
        ];

        $validated = $request->validate([
            'nome' => "required|min:5|max:100|unique:artesaos,nome,$id",
            'biografia' => 'nullable|string',
            'email' => 'nullable|email',
            'cidade' => 'nullable|string',
            'fotografia' => 'nullable|image|max:2048',
        ], $messages);

        $artesao = Artesao::findOrFail($id);
        $artesao->nome = $request->nome;
        $artesao->biografia = $request->biografia;
        $artesao->email = $request->email;
        $artesao->cidade = $request->cidade;

        if ($request->hasFile('fotografia')) {
            // Apagar a foto antiga, se existir
            if ($artesao->fotografia && \Storage::disk('public')->exists($artesao->fotografia)) {
                \Storage::disk('public')->delete($artesao->fotografia);
            }

            $path = $request->file('fotografia')->store('artesaos', 'public');
            $artesao->fotografia = $path;
        }

        $artesao->save();

        return redirect()->route('artesao.index')->with('success', 'Artesão atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $artesao = Artesao::findOrFail($id);

        // Apagar a foto antiga, se existir
        if ($artesao->fotografia && \Storage::disk('public')->exists($artesao->fotografia)) {
            \Storage::disk('public')->delete($artesao->fotografia);
        }

        // Deletar o registro
        $artesao->delete();

        return redirect()->route('artesao.index')->with('success', 'Artesão excluído com sucesso!');
    }
}
