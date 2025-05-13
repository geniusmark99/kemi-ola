<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('app-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles/fonts.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link rel="stylesheet" href="{{ asset('/build/assets/app-Cc6DndNb.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .cursor-dot {
            display: none;
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 9999;
            mix-blend-mode: difference;
        }

        .cursor-circle {
            display: none;
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: transform 0.15s ease-out;
            z-index: 9998;
            mix-blend-mode: difference;
        }

        @media screen and (min-width: 1300px) {

            .cursor-dot,
            .cursor-circle {
                display: block;
            }
        }

        .magnetic-btn {
            cursor: pointer;
            transition: transform 0.3s ease-out;
        }

        :root {
            --orange: #ff7448;
            --red: #ff4848;
            --purple: #6248ff;
        }

        .gradient-animation {
            background-image: linear-gradient(100deg, var(--orange), var(--red) 42%, var(--purple) 85%);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            animation: gradientAnimation 10s ease-in-out infinite;
            background-size: 200% 200%;
            letter-spacing: -.03em;
            -webkit-text-fill-color: transparent;
            transition: filter .3s;

        }

        @keyframes gradientAnimation {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .text {
            font-size: 17.5vw;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    @yield('app-style')
</head>

<body class="antialiased" style="font-family: 'neueMontreal-medium', sans-serif; " x-data="{ mobileMenu: false }">
    <main x-data="activeLinks" id="main-content">
        <x-widget.header />
        <div class="" data-scroll-container>
            @yield('app-content')
            <x-widget.footer />
        </div>
    </main>
</body>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('activeLinks', () => ({
            currentPath: window.location.pathname,
            isActive(path) {
                return this.currentPath === path;
            },
            getActivePath(path) {
                switch (path) {
                    case '/favour-store':
                        return 'text-black';
                    default:
                        return 'text-rose-200  bg-kemi-ojo font-bold';
                }
            }

        }));
    });
</script>
@yield('app-script')

</html>
