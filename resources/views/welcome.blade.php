@extends('layouts.app')

@section('content')

<div style="background-image: url('{{ asset('images/praia.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 500px;"></div>

<!-- Nav -->
<nav id="nav">
    <ul class="container">
        <li><a href="#top">Início</a></li>
        <li><a href="#work">Artesãos</a></li>
        <li><a href="#portfolio">Produtos</a></li>
        <li><a href="#contact">Perfil</a></li>
    </ul>
</nav>

<!-- Home -->
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h1><strong>Rio Art&Tec</strong></h1>
                </header>
                <p>Encontre, conheça e valorize artesãos do Rio de Janeiro.</p>
                <a href="#work" class="button large scrolly">Saiba mais!</a>
            </div>
        </div>
    </div>
</article>

<!-- Artesãos -->
<article id="work" class="wrapper style2">
    <div class="container">
        <header>
            <h2>Conheça alguns artesãos da Art&Tec</h2>
            <p>Profissionais incríveis e talentosos de diversas regiões do Brasil.</p>
        </header>
        <div class="row aln-center">
            @foreach ($artesaos as $artesao)
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-comments"></span>
                        <h3>{{ $artesao->nome }}</h3>
                        <p>{{ Str::limit($artesao->biografia, 100) }}</p>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
</article>

<!-- Postagens = Produtos -->
<article id="portfolio" class="wrapper style3">
    <div class="container">
        <header>
            <h2>Veja alguns dos nossos produtos</h2>
            <p>Artesanatos feitos com muito carinho.</p>
        </header>

        <div class="row">
            @foreach ($postagens as $postagens)
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($postagem->imagens as $imagem)
                                    <div class="swiper-slide">
                                        <a href="#" class="image featured"><img src="{{ asset('storage/' . $imagem->caminho) }}" alt="{{ $postagem->nome }}" /></a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <h3><a href="#">{{ $postagem->nome }}</a></h3>
                        <p>{{ Str::limit($postagem->descricao, 100) }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</article>

<!-- CONTATO -->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <div class="col-12">
            <hr />
            <h3>Find me on ...</h3>
            <ul class="social">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
                <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
            </ul>
            <hr />
        </div>
    </div>
    <footer>
        <ul id="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>
</article>

@endsection
