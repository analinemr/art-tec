@section('content')
<!-- Seção de artesãos com fotos -->
<section class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Conheça nossos artesãos</h2>
            <p>Profissionais incríveis e talentosos de diversas regiões do Brasil.</p>
        </header>
        <div class="row">
            @foreach ($artesaos as $artesao)
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box">
                        <!-- Foto do artesão -->
                        @if ($artesao->fotografia)
                            <a href="{{ url('/artesao/' . $artesao->id) }}" class="image featured">
                                <img src="{{ asset('storage/' . $artesao->fotografia) }}" alt="{{ $artesao->nome }}">
                            </a>
                        @else
                            <a href="{{ url('/artesao/' . $artesao->id) }}" class="image featured">
                                <img src="{{ asset('images/default-user.png') }}" alt="Sem foto">
                            </a>
                        @endif

                        <!-- Dados do artesão -->
                        <header>
                            <h3>{{ $artesao->nome }}</h3>
                            <p>{{ $artesao->cidade }}</p>
                        </header>
                        <p>{{ Str::limit($artesao->biografia, 100) }}</p>
                        <footer>
                            <a href="{{ url('/artesao/' . $artesao->id) }}" class="button alt">Ver perfil</a>
                        </footer>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
