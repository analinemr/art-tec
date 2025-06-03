@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagens</div>

                <!-- Script de confirmação -->
                <script>
                    function ConfirmDelete(){
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <div class="card-body">

                    <!-- Botão Criar -->
                    <div class="mb-3">
                        <a class="btn btn-success" href="{{ url('postagem/create') }}">Criar nova postagem</a>
                    </div>

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
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Artesão</th>
                                <th>Título</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postagens as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->artesao->nome ?? 'N/A' }}</td> <!-- Relacionamento com artesão -->
                                <td>{{ $value->titulo }}</td>
                                <td>
                                    <div style="display: flex; flex-wrap: wrap; gap: 5px;">
                                        <a class="btn btn-info btn-sm" href="{{ url('postagem/'.$value->id) }}">Visualizar</a>
                                        <a class="btn btn-warning btn-sm" href="{{ url('postagem/'.$value->id.'/edit') }}">Editar</a>

                                        <form action="{{ url('postagem/'.$value->id) }}" method="POST" onsubmit="return ConfirmDelete()">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            {{ $postagens->links() }}

                        </tbody>
                    </table>

                    <!-- Paginação, se estiver usando paginate() no controller -->
                    {{ $postagens->links() ?? '' }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
