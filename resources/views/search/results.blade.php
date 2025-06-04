@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultados para: "{{ $q }}"</h2>

    <h3>Artesãos</h3>
    @forelse($artesaos as $artesao)
        <div>
            <strong>{{ $artesao->nome }}</strong><br>
            <p>{{ $artesao->descricao }}</p>
        </div>
    @empty
        <p>Nenhum artesão encontrado.</p>
    @endforelse

    <h3>Produtos</h3>
    @forelse($produtos as $produto)
        <div>
            <strong>{{ $produto->nome }}</strong><br>
            <p>{{ $produto->descricao }}</p>
            <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>
    @empty
        <p>Nenhum produto encontrado.</p>
    @endforelse
</div>
@endsection
