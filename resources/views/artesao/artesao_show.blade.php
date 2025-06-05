@extends('adminlte::page')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Detalhes do Artesão</h4>
                </div>

                <div class="card-body text-center">
                    <!-- Fotografia -->
                    @if ($artesao->fotografia)
                        <img src="{{ asset('storage/' . $artesao->fotografia) }}"
                             alt="Foto de {{ $artesao->nome }}"
                             class="img-fluid rounded-circle mb-3 shadow"
                             style="max-width: 180px; height: auto;">
                    @else
                        <div class="mb-3 text-muted">Sem fotografia disponível</div>
                    @endif

                    <!-- Informações do Artesão -->
                    <p><strong>ID:</strong> {{ $artesao->id }}</p>
                    <p><strong>Nome:</strong> {{ $artesao->nome }}</p>
                    <p><strong>Biografia:</strong> {{ $artesao->biografia }}</p>
                    <p><strong>Email:</strong> {{ $artesao->email ?? '-' }}</p>
                    <p><strong>Cidade:</strong> {{ $artesao->cidade ?? '-' }}</p>
                    <p><strong>Criado em:</strong> {{ $artesao->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Atualizado em:</strong> {{ $artesao->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
