@extends('adminlte::page')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Postagem - Detalhes</h3>
                </div>

                <div class="card-body">
                    <p><strong>Id: </strong> {{ $postagem->id }}</p>
                    <p><strong>Categoria: </strong> {{ $postagem->categoria->nome }}</p>
                    <p><strong>Autor: </strong> {{ $postagem->autor->name }}</p>
                    <p><strong>Título: </strong> {{ $postagem->titulo }}</p>

                    <hr>

                    <p><strong>Descrição:</strong></p>
                    <div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px;">
                        {!! $postagem->descricao !!}
                    </div>

                    <hr>

                    <p><strong>Criação: </strong> {{ $postagem->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Atualização: </strong> {{ $postagem->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
