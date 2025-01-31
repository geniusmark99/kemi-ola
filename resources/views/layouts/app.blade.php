<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('app-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('/build/assets/app-DIE3Fw_w.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <script src="{{ asset('/scripts/aos.js') }}"></script>
    @yield('app-style')
</head>

<body class="font-sans antialiased" x-data="{ mobileMenu: false }">
    <main x-data="activeLinks">
        <x-widget.header />
        <main class="">
            @yield('app-content')

        </main>
        <x-widget.footer />
    </main>

    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}
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



{{-- 

    getActivePath(path) {
                switch (path) {
                    case '/favour-store':
                        return 'text-back';
                    default:
                        return 'text-rose-200 bg-kemi-ojo font-bold;
                }
            }
--}}
@yield('app-script')

</html>
