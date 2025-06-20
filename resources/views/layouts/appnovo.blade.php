<!DOCTYPE HTML>
<html>
<head>
    <title>Art&Tec</title>
    <meta charset="utf-8" />
    <!-- Responsivo para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    
    <!-- CSS principal -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- CSS do Swiper.js para o carrossel de imagens -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        /* Define a fonte e cor dos parágrafos */
        p{
            font: inherit;  
            color:rgb(20, 14, 47);         
        }

        /* Swiper container com largura total e altura automática */
        .swiper {
            width: 100%;
            height: auto;
        }

        /* Alinha o texto das slides ao centro */
        .swiper-slide {
            text-align: center;
        }

        /* Imagens dentro do Swiper */
        .swiper-slide img {
            width: 100%;
            height: 250px;
            object-fit: cover; /* Corta a imagem para cobrir o espaço */
            border-radius: 8px;
        }

        /* Imagem do artesão com estilo igual ao swiper-slide img */
        .artesao-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Container box flex para alinhar conteúdo verticalmente */
        .box {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Estiliza o título dentro da box */
        .box h3 {
            margin-top: 1em;
            font-size: 1.2em;
        }

        /* Estilização da paginação */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 6px;
            margin-top: 30px;
        }

        /* Links e spans dentro da paginação */
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

        /* Hover nos links da paginação */
        .pagination a:hover {
            background-color: #e6e6e6;
        }

        /* Página ativa na paginação - verde */
        .pagination .active {
            background-color: #4CAF50; /* Verde igual da imagem */
            color: white;
            border-color: #4CAF50;
            cursor: default; /* desabilita cursor pointer */
        }

        /* Links desabilitados */
        .pagination .disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        /* Estilo customizado do menu nav */
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

        /* Submenu oculto inicialmente */
        nav ul li ul {
            display: none;
            position: absolute;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            z-index: 100;
        }

        /* Exibe submenu ao passar o mouse */
        nav ul li:hover ul {
            display: block;
        }

        /* Itens do submenu */
        nav ul li ul li {
            padding: 5px 0;
        }

        /* Estilo dos links e botões do submenu */
        nav ul li ul li a,
        nav ul li ul li button {
            color: #333;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            font: inherit;
        }

        /* Hover nos itens do submenu */
        nav ul li ul li a:hover,
        nav ul li ul li button:hover {
            color: #008cba;
        }

    </style>
</head>

<body class="is-preload">

<!-- Navegação principal -->
<nav id="nav">
    <ul class="container">
        <!-- Menu da esquerda -->
        <div class="left">
            <li><a href="#top">Início</a></li>
            <li><a href="#work">Artesãos</a>
                <ul>
                  @foreach ($artesaos_menu as $value)
					<li><a href="{{ url('/PostagemByArtesaoId/' . $value->id) }}">{{ $value->nome }}</a></li>
                  @endforeach
                </ul> 

            </li>
            <li><a href="#portfolio">Produtos</a></li>
        </div>

        <!-- Menu da direita com autenticação -->
        <div class="right">
            <!-- Verifica se o usuário está autenticado -->
            @auth
                <li>
                    <!-- Mostra o nome do usuário logado -->
                    <a href="#">{{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="{{ route('home') }}">Início</a></li>
                        <li><a href="{{ route('admin.alterarSenha') }}">Alterar Senha</a></li>
                        <li>
                            <!-- Formulário para logout com método POST -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <!-- Links para login e cadastro se não autenticado -->
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Cadastrar</a></li>
            @endauth
        </div>
    </ul>
</nav>

<!-- Seção Home com imagem de fundo -->
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

<div class="container">
    @yield('content')
</div>

<!-- Seção Contato / Footer -->
<article id="contact" class="wrapper style4">
    <ul class="container">
        <div class="container medium">
            <footer>
                <ul id="copyright">
                    <li>&copy; Untitled. All rights reserved.</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>
        </div>
    </ul>
</article>

<!-- Scripts JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<!-- Biblioteca Swiper.js para carrossel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Inicialização do Swiper -->
<script>
    // Aguarda o carregamento do DOM
    document.addEventListener('DOMContentLoaded', function () {
        // Seleciona todos os containers Swiper com a classe 'mySwiper'
        const swipers = document.querySelectorAll('.mySwiper');

        // Para cada container, inicializa o Swiper com configurações específicas
        swipers.forEach((swiperContainer) => {
            new Swiper(swiperContainer, {
                slidesPerView: 1,    // Mostra 1 slide por vez
                loop: true,          // Ativa looping infinito
                pagination: {
                    el: swiperContainer.querySelector('.swiper-pagination'), // Paginação customizada dentro do container
                    clickable: true,  // Permite clicar na paginação para navegar
                }
            });
        });
    });
</script>

</body>
</html>
