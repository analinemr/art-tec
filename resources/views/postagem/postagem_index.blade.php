@extends('adminlte::page')

@section('title', 'Postagens')

@section('content_header')
    <h1>Lista de Postagens</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Postagens</span>
        <a class="btn btn-success"
           href="{{ route('postagem.create') }}"
           data-toggle="tooltip"
           title="Criar nova postagem">
            <i class="fas fa-plus-circle"></i> Criar nova postagem
        </a>
    </div>

    <div class="card-body">

        <!-- Mensagens -->
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tabela -->
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Artesão</th>
                    <th>Título</th>
                    <th style="width: 180px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postagens as $postagem)
                <tr>
                    <td>{{ $postagem->id }}</td>
                    <td>{{ $postagem->artesao->nome ?? 'N/A' }}</td>
                    <td>{{ $postagem->titulo }}</td>

                    <!--Botões de ação-->
                    <td>
                        <div class="d-flex" style="gap: 5px;">

                            <!-- Visualizar -->
                            <a class="btn btn-info btn-sm"
                               href="{{ route('postagem.show', $postagem->id) }}"
                               data-toggle="tooltip"
                               title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- Editar -->
                            <a class="btn btn-warning btn-sm"
                               href="{{ route('postagem.edit', $postagem->id) }}"
                               data-toggle="tooltip"
                               title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Excluir -->
                            <form action="{{ route('postagem.destroy', $postagem->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta postagem?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        data-toggle="tooltip"
                                        title="Excluir">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('js')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
