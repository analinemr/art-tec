@extends('adminlte::page')

@section('title', 'Artesãos')

@section('content_header')
    <h1>Lista de Artesãos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Artesãos</span>
        <a class="btn btn-success"
           href="{{ route('artesao.create') }}"
           data-toggle="tooltip"
           title="Cadastrar novo artesão">
            <i class="fas fa-plus-circle"></i> Cadastrar novo artesão
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
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Foto</th>
                    <th style="width: 180px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artesaos as $artesao)
                <tr>
                    <td>{{ $artesao->id }}</td>
                    <td>{{ $artesao->nome }}</td>
                    <td>{{ $artesao->email }}</td>
                    <td>{{ $artesao->cidade }}</td>

                    <!--Fotografia-->
                    <td>
                        @if ($artesao->fotografia)
                            <img src="{{ asset('storage/' . $artesao->fotografia) }}"
                                 alt="Foto de {{ $artesao->nome }}"
                                 width="50" height="50"
                                 style="border-radius: 50%; object-fit: cover;">
                        @else
                            <span class="text-muted">Sem foto</span>
                        @endif
                    </td>

                    <!--Botões de ação-->
                    <td>
                        <div class="d-flex" style="gap: 5px;">

                            <!-- Visualizar -->
                            <a class="btn btn-info btn-sm"
                            href="{{ route('artesao.show', $artesao->id) }}"
                            data-toggle="tooltip"
                            title="Visualizar">
                            <i class="fas fa-eye"></i>
                            </a>

                            <!-- Editar -->
                            <a class="btn btn-warning btn-sm"
                            href="{{ route('artesao.edit', $artesao->id) }}"
                            data-toggle="tooltip"
                            title="Editar">
                            <i class="fas fa-edit"></i>
                            </a>

                            <!-- Excluir -->
                            <form action="{{ route('artesao.destroy', $artesao->id) }}"
                                method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir?')">
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
                    </td>                </tr>
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
