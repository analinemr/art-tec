@extends('layouts.appnovo')

@section('content')
    			<!-- Main -->
                <div class="row aln-center">
            <!-- Loop dos artesãos vindos do backend -->

                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                    <!-- Verifica se o artesão tem fotografia -->
                    @if ($artesao->fotografia)
                        <!-- Exibe a imagem armazenada no storage -->
                        <img src="{{ asset('storage/' . $artesao->fotografia) }}" alt="{{ $artesao->nome }}" class="artesao-img">
                    @else
                        <!-- Ícone padrão se não houver foto -->
                        <span class="icon featured fa-user"></span>
                    @endif

                        <!-- Nome do artesão -->
                        <h3>{{ $artesao->nome }}</h3>
                        <!-- Biografia limitada a 100 caracteres e removendo tags HTML -->
                        <p>{{ Str::limit(strip_tags($artesao->biografia ?? 'Sem biografia'), 100) }}</p>
                    </section>
                </div>

        </div>


        <!-- Seção Produtos -->
<article id="portfolio" class="wrapper style3" style="
    background-image: url('{{ asset('images/copa.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <div class="container">
        <header>
            <h2>Veja alguns dos nossos produtos</h2>
            <p>Artesanatos feitos com muito carinho e muita qualidade</p>
        </header>

        <div class="row">
            <!-- Loop das postagens (produtos) -->
            @foreach ($artesao->postagens as $postagem)
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <!-- Swiper para imagens da postagem -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @php
                                    // Expressão regular para extrair URLs das imagens da descrição HTML
                                    preg_match_all('/<img[^>]+src="([^">]+)"/i', $postagem->descricao, $matches);
                                    $descricaoImagens = $matches[1] ?? [];
                                @endphp

                                @if (!empty($descricaoImagens))
                                    <!-- Para cada imagem encontrada na descrição -->
                                    @foreach ($descricaoImagens as $imgSrc)
                                        <div class="swiper-slide">
                                            <!-- Link para a página da postagem -->
                                            <a href="{{ route('postagem.show', $postagem->id) }}" class="image featured">
                                                <img src="{{ $imgSrc }}" alt="Imagem da postagem">
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Imagem padrão caso não tenha nenhuma imagem na descrição -->
                                    <div class="swiper-slide">
                                        <a href="{{ route('postagem.show', $postagem->id) }}" class="image featured">
                                            <img src="{{ asset('images/default-image.jpg') }}" alt="Imagem padrão">
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <!-- Paginação do Swiper -->
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- Título da postagem com link para detalhes -->
                        <h3>
                            <a href="{{ route('postagem.show', $postagem->id) }}">
                                {{ $postagem->titulo }}
                            </a>
                        </h3>

                        <!-- Resumo da descrição com limite de 100 caracteres e removendo HTML -->
                        <p>{!! Str::limit(strip_tags($postagem->descricao), 100) !!}</p>
                    </article>
                </div>
            @endforeach
        </div>


				</section>



@endsection