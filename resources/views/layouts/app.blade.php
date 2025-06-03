<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <title>Art&Tec</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
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
</head>
<body class="is-preload">

    @yield('content')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
