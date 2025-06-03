@extends('adminlte::page')

@section('content')

<!-- Estilos e scripts do Rich Text Editor -->
<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Postagem</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulário de edição de postagem -->
                    <form action="{{ url('postagem/' . $postagem->id) }}" method="post">
                        @method('PUT')
                        @csrf

                        <!-- Seleção de Artesão -->
                        <div class="form-group">
                            <label for="artesao_id">Artesão:</label>
                            <select name="artesao_id" class="form-control">
                                @foreach ($artesaos as $value)
                                    <option value="{{ $value->id }}"
                                        {{ $value->id == $postagem->artesao_id ? 'selected' : '' }}>
                                        {{ $value->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Título -->
                        <div class="form-group">
                            <label for="titulo">Título da Postagem:</label>
                            <input type="text" value="{{ $postagem->titulo }}" name="titulo" class="form-control">
                        </div>

                        <!-- Descrição -->
                        <div class="form-group">
                            <label for="descricao">Descrição da Postagem:</label>
                            <textarea name="descricao" rows="5" class="form-control" id="inp_editor1">{{ $postagem->descricao }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                    <!-- Inicializa o editor -->
                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
