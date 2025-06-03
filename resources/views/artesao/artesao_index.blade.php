@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Artesãos</div>

                <!-- Script de confirmação -->
                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <div class="card-body">

                    <!-- Botão Criar -->
                    <a class="btn btn-success mb-3" href="{{ url('artesao/create') }}">Cadastrar novo artesão</a>

                    <!-- Mensagens de sessão -->
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
                    <table class='table table-bordered table-hover'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Cidade</th>
                                <th>Foto</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artesaos as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nome }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->telefone }}</td>
                                <td>{{ $value->cidade }}</td>
                                <td>
                                    @if ($value->fotografia)
                                        <img src="{{ asset('storage/' . $value->fotografia) }}" alt="Foto" width="50">
                                    @else
                                        <span>Sem foto</span>
                                    @endif
                                </td>
                                <td>
                                    <div style="display: flex; flex-wrap: wrap; gap: 5px;">
                                        <a class="btn btn-info btn-sm" href="{{ url('artesao/'.$value->id) }}">Visualizar</a>
                                        <a class="btn btn-warning btn-sm" href="{{ url('artesao/'.$value->id.'/edit') }}">Editar</a>

                                        <form action="{{ url('artesao/' . $value->id)}}" method="post" onsubmit="return ConfirmDelete()">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
