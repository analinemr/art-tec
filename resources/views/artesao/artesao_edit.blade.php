@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Artesão</div>

                <div class="card-body">

                    <!-- Exibição de erros -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Formulário de edição de artesão -->
                    <form action="{{ url('artesao/' . $artesao->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome do Artesão:</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ $artesao->nome }}">
                        </div>

                        <div class="form-group">
                            <label for="biografia">Biografia:</label>
                            <textarea id="biografia" name="biografia" class="form-control" rows="4">{{ $artesao->biografia }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $artesao->email }}">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $artesao->telefone }}">
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="form-control" value="{{ $artesao->cidade }}">
                        </div>

                        <div class="form-group">
                            <label for="fotografia">Fotografia:</label><br>
                            @if ($artesao->fotografia)
                                <img src="{{ asset('storage/' . $artesao->fotografia) }}" alt="Foto do Artesão" style="max-width: 200px;" class="mb-2"><br>
                            @endif
                            <input type="file" id="fotografia" name="fotografia" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
