<!DOCTYPE HTML>
<html>
<head>
    <title>Art&Tec</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        
        p{
            font: inherit;  
            color:rgb(20, 14, 47);         
        }

        /* Swiper */
        .swiper {
            width: 100%;
            height: auto;
        }

        .swiper-slide {
            text-align: center;
        }

        .swiper-slide img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Artesão */
        .artesao-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        .box {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box h3 {
            margin-top: 1em;
            font-size: 1.2em;
        }

        /* Paginação */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 6px;
            margin-top: 30px;
        }

        .pagination a,
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #000;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
        }

        .pagination a:hover {
            background-color: #e6e6e6;
        }

        .pagination .active {
            background-color: #4CAF50; /* Verde igual da imagem */
            color: white;
            border-color: #4CAF50;
            cursor: default;
        }

        .pagination .disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        /* Nav custom */
        nav ul.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        nav ul.container .left,
        nav ul.container .right {
            display: flex;
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            align-items: center;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            z-index: 100;
        }

        nav ul li:hover ul {
            display: block;
        }

        nav ul li ul li {
            padding: 5px 0;
        }

        nav ul li ul li a,
        nav ul li ul li button {
            color: #333;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            font: inherit;
        }

        nav ul li ul li a:hover,
        nav ul li ul li button:hover {
            color: #008cba;
        }

    </style>
</head>

<body class="is-preload">

<!-- Nav -->
<nav id="nav">
    <ul class="container">
        <div class="left">
            <li><a href="#top">Início</a></li>
            <li><a href="#work">Artesãos</a></li>
            <li><a href="#portfolio">Produtos</a></li>
        </div>

        <div class="right">
            @auth
                <li>
                    <a href="#">{{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="{{ route('home') }}">Início</a></li>
                        <li><a href="{{ route('admin.alterarSenha') }}">Alterar Senha</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Cadastrar</a></li>
            @endauth
        </div>
    </ul>
</nav>

<!-- Home -->
<article id="top" class="wrapper style1" style="
    background-image: url('{{ asset('images/praia.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 500px;">
    <div class="container">
        <div class="row">
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h1><strong>Rio Art&Tec</strong></h1>
                </header>
                <p>Encontre, conheça e valorize artesãos do Rio de Janeiro.</p>
            </div>
        </div>
    </div>
</article>

<!-- Artesãos -->
<article id="work" class="wrapper style2" style="
    background-image: url('{{ asset('images/areia.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <div class="container">
        <header>
            <h2>Conheça alguns artesãos da Art&Tec</h2>
            <p>Apresentamos os maravilhosos artesão da Art&Tec</p>
        </header>
        <div class="row aln-center">
            @foreach ($artesaos as $artesao)
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                    @if ($artesao->fotografia)
                        <img src="{{ asset('storage/' . $artesao->fotografia) }}" alt="{{ $artesao->nome }}" class="artesao-img">
                    @else
                        <span class="icon featured fa-user"></span>
                    @endif                        <h3>{{ $artesao->nome }}</h3>
                        <p>{{ Str::limit(strip_tags($artesao->biografia ?? 'Sem biografia'), 100) }}</p>
                    </section>
                </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="pagination">
            {{-- Link para página anterior --}}
            @if ($artesaos->onFirstPage())
                <span>«</span>
            @else
                <a href="{{ $artesaos->previousPageUrl() }}#work" rel="prev">«</a>
            @endif

            {{-- Links das páginas --}}
            @foreach ($artesaos->getUrlRange(1, $artesaos->lastPage()) as $page => $url)
                @if ($page == $artesaos->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}#work">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Link para página seguinte --}}
            @if ($artesaos->hasMorePages())
                <a href="{{ $artesaos->nextPageUrl() }}#work" rel="next">»</a>
            @else
                <span>»</span>
            @endif
        </div>

    </div>
</article>

<!-- Produtos -->
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
            @foreach ($postagens as $postagem)
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @php
                                    preg_match_all('/<img[^>]+src="([^">]+)"/i', $postagem->descricao, $matches);
                                    $descricaoImagens = $matches[1] ?? [];
                                @endphp

                                @if (!empty($descricaoImagens))
    <!---->
                                    @foreach ($descricaoImagens as $imgSrc)
                                        <div class="swiper-slide">
                                            <a href="{{ route('postagem.show', $postagem->id) }}" class="image featured">
                                                <img src="{{ $imgSrc }}" alt="Imagem da postagem">
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <a href="{{ route('postagem.show', $postagem->id) }}" class="image featured">
                                            <img src="{{ asset('images/default-image.jpg') }}" alt="Imagem padrão">
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <h3>
                            <a href="{{ route('postagem.show', $postagem->id) }}">
                                {{ $postagem->titulo }}
                            </a>
                        </h3>

                        <p>{!! Str::limit(strip_tags($postagem->descricao), 100) !!}</p>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="pagination">
            {{-- Link para página anterior --}}
            @if ($postagens->onFirstPage())
                <span>«</span>
            @else
                <a href="{{ $postagens->previousPageUrl() }}#portfolio" rel="prev">«</a>
            @endif

            {{-- Links das páginas --}}
            @foreach ($postagens->getUrlRange(1, $postagens->lastPage()) as $page => $url)
                @if ($page == $postagens->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}#portfolio">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Link para página seguinte --}}
            @if ($postagens->hasMorePages())
                <a href="{{ $postagens->nextPageUrl() }}#portfolio" rel="next">»</a>
            @else
                <span>»</span>
            @endif
        </div>
        
    </div>
</article>


<!-- Contato -->
<article id="contact" class="wrapper style4">
       <ul class="container">
    <div class="container medium">
    <footer>
        <ul id="copyright">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>
</article>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swipers = document.querySelectorAll('.mySwiper');
        swipers.forEach((swiperContainer) => {
            new Swiper(swiperContainer, {
                slidesPerView: 1,
                loop: true,
                pagination: {
                    el: swiperContainer.querySelector('.swiper-pagination'),
                    clickable: true,
                }
            });
        });
    });
</script>

</body>
</html>
