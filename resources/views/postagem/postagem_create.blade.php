@extends('adminlte::page')

@section('content')

<!-- Estilos e scripts do Editor Rich -->
<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo produto</div>

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

                    <!-- Formulário de criação de postagem -->
                    <form action="{{ url('postagem') }}" method="post">
                        @csrf

                        <!-- Seleção do Artesão -->
                        <div class="form-group">
                            <label for="artesao_id">Artesão:</label>
                            <select name="artesao_id" id="artesao_id" class="form-control">
                                @foreach ($artesaos as $value)
                                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Campo de título -->
                        <div class="form-group">
                            <label for="titulo">Nome do produto:</label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                        </div>

                        <!-- Campo de descrição com editor -->
                        <div class="form-group">
                            <label for="descricao">Descrição do produto:</label>
                            <textarea name="descricao" id="inp_editor1" rows="5" class="form-control">Escreva a descrição da sua postagem</textarea>
                        </div>

                        <!-- Botão enviar -->
                        <div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>

                    <!-- Renderizar editor RichText -->
                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
