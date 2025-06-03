<!DOCTYPE HTML>
<html>
<head>
    <title>Art&Tec</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
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

        .pagination {
            text-align: center;
            margin: 30px 0;
        }

        .pagination .page-link,
        .pagination .page-item {
            display: inline-block;
            margin: 0 5px;
        }
    </style>
</head>
<body class="is-preload">

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
                <a href="#work" class="button large scrolly">Saiba mais!</a>
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
            <p>Odio turpis amet sed consequat eget posuere consequat.</p>
        </header>
        <div class="row aln-center">
            @foreach ($artesaos as $artesao)
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        @if ($artesao->fotografia)
                            <img src="{{ asset('storage/' . $artesao->fotografia) }}" alt="{{ $artesao->nome }}" class="artesao-img">
                        @else
                            <span class="icon featured fa-user"></span>
                        @endif
                        <h3>{{ $artesao->nome }}</h3>
                        <p>{{ Str::limit(strip_tags($artesao->biografia ?? 'Sem biografia'), 100) }}</p>
                    </section>
                </div>
            @endforeach
        </div>

        <!-- Paginação Artesãos -->
        <div class="pagination">
            {{ $artesaos->links() }}
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
            <p>Artesanatos feitos com muito carinho.</p>
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

        <!-- Paginação Produtos -->
        <div class="pagination">
            {{ $postagens->links() }}
        </div>
    </div>
</article>

<!-- Contato -->
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
