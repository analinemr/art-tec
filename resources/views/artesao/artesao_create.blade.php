@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Novo Artesão</div>

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

                    <!-- Formulário de criação de artesão -->
                    <form action="{{ url('artesao') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome do Artesão</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="biografia">Biografia</label>
                            <textarea id="biografia" name="biografia" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="fotografia">Fotografia</label>
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
