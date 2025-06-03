<!DOCTYPE HTML>
<html>
	<head>
		<title>Art&Tec</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

    <div style="background-image: url('{{ asset('images/praia.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 500px;"></div>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        .swiper {
            width: 100%;
            height: auto;
        }

        .swiper-slide img {
            width: 100%;
            border-radius: 8px;
        }
    </style>

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
    <article id="top" class="wrapper style1">
        <div class="container">
            <div class="row">
                <div class="col-8 col-7-large col-12-medium">
                    <<header>
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
                <p>Odio turpis amet sed consequat eget posuere consequat.</p>
            </header>
            <div class="row aln-center">
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-comments"></span>
                        <h3>nome artesao</h3>
                        <p>biografia artesão</p>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon solid featured fa-camera-retro"></span>
                        <h3>nome artesao</h3>
                        <p>biografia artesão</p>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-thumbs-up"></span>
                        <h3>nome artesao</h3>
                        <p>biografia artesão</p>
                    </section>
                </div>
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
            <!-- Card 1 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">

                    <!-- Carrossel dentro do card -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <h3><a href="#">Magna feugiat</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>

            <!-- Card 2 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a href="#">Veroeros primis</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>

            <!-- Card 3 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a href="#">Lorem ipsum</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>

            <!-- Card 4 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a href="#">Tempus dolore</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>

            <!-- Card 5 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a href="#">Feugiat aliquam</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>

            <!-- Card 6 -->
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3><a href="#">Sed amet ornare</a></h3>
                    <p>Ornare nulla proin odio consequat.</p>
                </article>
            </div>
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
        </div>
    </article>

<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Script para ativar todos os carrosseis -->
<script>
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
</script>

</body>

</html>
