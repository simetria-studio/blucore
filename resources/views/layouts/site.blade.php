<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Meta tags dinâmicas --}}
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'Descrição padrão do seu site')">
    
    {{-- Open Graph tags para redes sociais --}}
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Descrição padrão do seu site')">
    <meta property="og:image" content="@yield('og_image', asset('images/default-og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    
    {{-- Twitter Card tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', config('app.name'))">
    <meta name="twitter:description" content="@yield('description', 'Descrição padrão do seu site')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/default-og-image.jpg'))">
    
    {{-- Canonical URL para evitar conteúdo duplicado --}}
    <link rel="canonical" href="{{ url()->current() }}" />
    
    {{-- Meta tags adicionais para SEO --}}
    <meta name="robots" content="index, follow">
    <meta name="author" content="{{ config('app.name') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('site/img/favicon.ico') }}" type="image/x-icon">

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/contato.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
    @yield('additional_meta_tags')
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('site/img/logo-blue.png') }}" alt="BluCore Logo">
                </a>
            </div>
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="#about">Sobre</a>
                <a href="#services">Serviços</a>
                <a href="#pricing">Preços</a>
                <a href="{{ route('contato') }}">Contato</a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
        <div class="mobile-nav">
            <div class="mobile-nav-header">
                <img src="{{ asset('site/img/logo-blue.png') }}" alt="BluCore Logo">
                <div class="close-menu">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="mobile-nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="#about">Sobre</a>
                <a href="#services">Serviços</a>
                <a href="#pricing">Preços</a>
                <a href="{{ route('contato') }}">Contato</a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <img src="{{ asset('site/img/logo-blue.png') }}" alt="BluCore Logo" class="footer-logo">
                <p>Soluções tecnológicas para impulsionar seu negócio no mundo digital.</p>
            </div>
            <div class="footer-section">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#pricing">Preços</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contato</h3>
                <p><i class="fas fa-phone"></i> (11) 1234-5678</p>
                <p><i class="fas fa-envelope"></i> contato@blucore.com.br</p>
                <div class="social-links">
                    {{-- <a href="#"><i class="fab fa-facebook"></i></a> --}}
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    {{-- <a href="#"><i class="fab fa-linkedin"></i></a> --}}
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 BluCore - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('site/js/pricing.js') }}"></script>
    <script src="{{ asset('site/js/menu.js') }}"></script>
    <div class="overlay"></div>
</body>

</html>
