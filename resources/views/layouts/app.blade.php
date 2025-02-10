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

    <link rel="stylesheet" href="{{ asset('/build/assets/app-DDXP146k.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Locomotive Scroll -->
    <link rel="stylesheet" href="{{ asset('styles/locomotive-scroll.min.css') }}">
    <script src="{{ asset('scripts/locomotive-scroll.min.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('scripts/gsap.min.js') }}"></script>
    <script src="{{ asset('scripts/ScrollTrigger.min.js') }}"></script>

    <style>
        /* Custom Cursor Dot */
        .cursor-dot {
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

        /* Cursor Circle (Trailing Effect) */
        .cursor-circle {
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

        /* Magnetic Button */
        .magnetic-btn {
            /* display: inline-block; */
            /* padding: 15px 30px; */
            /* font-size: 18px; */
            cursor: pointer;
            transition: transform 0.3s ease-out;
            /* position: relative; */
            /* overflow: hidden; */
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


        /* Optional: Hide scrollbar */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>


    {{-- <link rel="stylesheet" href="{{ asset('/build/assets/app-DIE3Fw_w.css') }}">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    @yield('app-style')
</head>

<body class="antialiased" style="font-family: 'neueMontreal-medium', sans-serif; " x-data="{ mobileMenu: false }">


    <div class="cursor-dot"></div>
    <div class="cursor-circle"></div>
    <main x-data="activeLinks" id="main-content">
        <x-widget.header />
        <main class="" data-scroll-container>
            @yield('app-content')
            <x-widget.footer />
        </main>
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



    document.addEventListener("DOMContentLoaded", () => {
        // Initialize Locomotive Scroll
        const locoScroll = new LocomotiveScroll({
            el: document.querySelector("[data-scroll-container]"),
            smooth: true,
            lerp: 0.1, // Adjusts the smoothness (lower = smoother)
        });

        // Connect GSAP with Locomotive Scroll
        gsap.registerPlugin(ScrollTrigger);

        locoScroll.on("scroll", ScrollTrigger.update);

        ScrollTrigger.scrollerProxy("[data-scroll-container]", {
            scrollTop(value) {
                return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance
                    .scroll.y;
            },
            getBoundingClientRect() {
                return {
                    top: 0,
                    left: 0,
                    width: window.innerWidth,
                    height: window.innerHeight
                };
            },
            pinType: document.querySelector("[data-scroll-container]").style.transform ? "transform" :
                "fixed",
        });


        ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
        ScrollTrigger.refresh();
    });



    document.addEventListener("DOMContentLoaded", () => {
        const cursorDot = document.querySelector(".cursor-dot");
        const cursorCircle = document.querySelector(".cursor-circle");

        document.addEventListener("mousemove", (e) => {
            // Small Dot (Fast Follow)
            gsap.to(cursorDot, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.1,
                ease: "power3.out",
            });

            // Larger Circle (Smoother, Delayed Movement)
            gsap.to(cursorCircle, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.3,
                ease: "power3.out",
            });
        });

        // Hover Effect for Interactive Elements
        document.querySelectorAll("a, button, .magnetic-btn").forEach((element) => {
            element.addEventListener("mouseenter", () => {
                gsap.to(cursorCircle, {
                    width: 60,
                    height: 60,
                    duration: 0.2
                });
            });

            element.addEventListener("mouseleave", () => {
                gsap.to(cursorCircle, {
                    width: 40,
                    height: 40,
                    duration: 0.2
                });
            });
        });

        // Magnetic Effect on Buttons
        document.querySelectorAll(".magnetic-btn").forEach((el) => {
            el.addEventListener("mousemove", function(e) {
                const {
                    left,
                    top,
                    width,
                    height
                } = el.getBoundingClientRect();
                const x = e.clientX - (left + width / 2);
                const y = e.clientY - (top + height / 2);

                gsap.to(el, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.3,
                    ease: "power3.out",
                });
            });

            el.addEventListener("mouseleave", function() {
                gsap.to(el, {
                    x: 0,
                    y: 0,
                    duration: 0.3,
                    ease: "power3.out",
                });
            });
        });

        // Initialize Locomotive Scroll
        const scroll = new LocomotiveScroll({
            el: document.querySelector("[data-scroll-container]"),
            smooth: true,
        });
    });
</script>

<script></script>
@yield('app-script')

</html>
