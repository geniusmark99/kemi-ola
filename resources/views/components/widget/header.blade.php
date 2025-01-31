<section>

    <header x-data="{
        lastScroll: 0,
        isVisible: true,
        handleScroll() {
            const currentScroll = window.scrollY;
            this.isVisible = currentScroll < this.lastScroll || currentScroll < 50;
            this.lastScroll = currentScroll;
        }
    }" x-init="window.addEventListener('scroll', handleScroll)" :class="isVisible ? 'translate-y-0' : '-translate-y-full'"
        class="fixed top-0 left-0 w-full bg-white shadow-lg z-50 transition-transform duration-300 ease-in-out">
        <nav
            class="relative px-6 py-3 lg:py-5 flex justify-between items-center header-pattern bg-kemi-ojo border-b border-white">

            @if (Route::is('home'))
                <a class="text-3xl font-bold leading-none block" href="/">
                    <img class="h-12" src="{{ asset('/images/Kemi-Logo.png') }}" alt="" width="auto">
                </a>
            @elseif(Route::is('favour'))
                <a class="text-3xl font-bold leading-none block" href="/">
                    <img class="h-12" src="{{ asset('/images/favour-online-logo-2.jpg') }}" alt=""
                        width="auto">
                </a>
            @elseif(Route::is('protokos'))
                <a class="text-3xl font-bold leading-none block" href="/">
                    <img class="h-12 rounded-xl" src="{{ asset('/images/protokos-publisher-logo.png') }}" alt=""
                        width="auto">
                </a>
            @elseif(Route::is('medical'))
                <a class="text-3xl font-bold leading-none block" href="/">
                    <img class="h-12 rounded-xl" src="{{ asset('/images/Protokos-logo.png') }}" alt=""
                        width="auto">
                </a>
            @else
                <a class="text-3xl font-bold leading-none block" href="/">
                    <img class="h-12 rounded-xl" src="{{ asset('/images/Kemi-Logo.png') }}" alt=""
                        width="auto">
                </a>
            @endif

            <div class="lg:hidden">
                <button @click="mobileMenu = !mobileMenu" class="navbar-burger flex items-center text-white p-3">
                    <svg class="block h-4 w-4" :class="isActive('/favour-store') ? 'fill-white' : 'fill-current'"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>

            <ul
                class="text-white hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm hover:text-kemi-ojo-2 hover:underline"
                        :class="isActive('/') ? 'text-kemi-ojo-2 underline font-bold relative' : 'text-white'"
                        href="/">
                        Home
                    </a></li>


                <li><a class="text-sm hover:text-kemi-ojo-2 hover:underline"
                        :class="isActive('/protokos-publishers') ? 'text-kemi-ojo-2 underline font-bold' : 'text-white'"
                        href="{{ route('protokos') }}">
                        Protokos Publishers
                    </a></li>

                <li><a class="text-sm hover:text-kemi-ojo-2 hover:underline"
                        :class="isActive('/medical-ultrasound') ? 'text-kemi-ojo-2 underline' : 'text-white'"
                        href="{{ route('medical') }}">Medical
                        Ultrasound</a></li>

                <li><a class="text-sm hover:text-kemi-ojo-2 hover:underline"
                        :class="isActive('/favour-store') ? 'text-kemi-ojo-2 underline' : 'text-white'"
                        href="{{ route('favour') }}">Favour
                        Store</a></li>

                <li><a :class="isActive('/eko-ede-yoruba') ? 'text-kemi-ojo-2 underline ' : 'text-white'"
                        class="text-sm hover:text-kemi-ojo-2 hover:underline" href="{{ route('ede-yoruba') }}">
                        Ẹ̀kọ́ Èdè Yorùbá
                    </a>
                </li>
            </ul>

            <div class="hidden lg:flex items-center gap-x-10">


                <div class="flex items-center justify-between gap-x-4">
                    <a href="#" class="block">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M24,4C12.972,4,4,12.972,4,24c0,10.006,7.394,18.295,17,19.75V29h-4c-0.552,0-1-0.447-1-1v-3c0-0.553,0.448-1,1-1h4v-3.632C21,15.617,23.427,13,27.834,13c1.786,0,3.195,0.124,3.254,0.129C31.604,13.175,32,13.607,32,14.125V17.5c0,0.553-0.448,1-1,1h-2c-1.103,0-2,0.897-2,2V24h4c0.287,0,0.56,0.123,0.75,0.338c0.19,0.216,0.278,0.502,0.243,0.786l-0.375,3C31.555,28.624,31.129,29,30.625,29H27v14.75c9.606-1.455,17-9.744,17-19.75C44,12.972,35.028,4,24,4z" />
                        </svg>
                    </a>
                    <a href="#" class="block">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M12.5 6C8.916 6 6 8.916 6 12.5L6 35.5C6 39.084 8.916 42 12.5 42L35.5 42C39.084 42 42 39.084 42 35.5L42 12.5C42 8.916 39.084 6 35.5 6L12.5 6 z M 13.828125 14L20.265625 14L25.123047 20.943359L31.136719 14L33.136719 14L26.025391 22.234375L34.257812 34L27.820312 34L22.470703 26.351562L15.865234 34L13.822266 34L21.564453 25.056641L13.828125 14 z M 16.935547 15.695312L28.587891 32.304688L31.150391 32.304688L19.498047 15.695312L16.935547 15.695312 z" />
                        </svg>
                    </a>
                    <a href="#" class="block">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M36.5,6h-25C8.468,6,6,8.468,6,11.5v25c0,3.032,2.468,5.5,5.5,5.5h25c3.032,0,5.5-2.468,5.5-5.5v-25C42,8.468,39.532,6,36.5,6z M18,34c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1V34z M15.5,18c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C18,16.881,16.881,18,15.5,18z M35,34c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1v-7.5c0-1.379-1.121-2.5-2.5-2.5S25,25.121,25,26.5V34c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1v0.541C26.063,20.586,27.462,20,29,20c3.309,0,6,2.691,6,6V34z" />
                        </svg>
                    </a>
                </div>



                <a :class="isActive('/contact') ? 'bg-kemi-ojo font-bold text-white border-white' : 'bg-white hover:border-white'"
                    class="hidden lg:inline-block  border border-transparent hover:bg-kemi-ojo 
                    hover:text-white py-2 px-6  text-sm text-kemi-ojo font-bold rounded-l-xl rounded-t-xl 
                    transition duration-200"
                    href="{{ route('contact') }}">Contact me
                </a>
            </div>


        </nav>
    </header>



    <template x-if="true">
        <div x-show="mobileMenu" @click.away="mobileMenu = false"
            :class="mobileMenu ? 'block lg:hidden' : 'hidden lg:hidden'"
            x-transition:enter="transform transition-transform duration-300"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" class="fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <img class="h-12" src="{{ asset('/images/Kemi-Logo.png') }}" alt="" width="auto">
                    </a>
                    <button
                        class="size-8 bg-kemi-ojo-2 text-white transition-all hover:bg-kemi-ojo flex justify-center items-center rounded-full "
                        @click="mobileMenu = !mobileMenu">
                        <svg class="size-4 text-white cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>

                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-kemi-ojo hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="/">Home</a>
                        </li>

                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-kemi-ojo   hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/protokos-publishers') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="{{ route('protokos') }}">Protokos Publishers</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-kemi-ojo   hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/medical-ultrasound') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="{{ route('medical') }}">Medical Ultrasound</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-kemi-ojo   hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/favour-store') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="{{ route('favour') }}">Favour Store</a></li>

                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-kemi-ojo   hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/eko-ede-yoruba') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="{{ route('ede-yoruba') }}"> Ẹ̀kọ́ Èdè Yorùbá</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold   hover:text-white hover:bg-kemi-ojo rounded"
                                :class="isActive('/contact') ? 'text-kemi-ojo-2  bg-kemi-ojo font-bold' : ''"
                                href="{{ route('contact') }}">Contact me</a></li>

                    </ul>
                </div>
                <div class="mt-auto">

                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>©
                            {{ date('Y') }}
                            All rights reserved.</span>
                    </p>
                    <div class="text-center">
                        <a class="inline-block px-1" href="#">
                            <img src="{{ asset('./images/facebook.svg') }}" alt="">
                        </a>
                        <a class="inline-block px-1" href="#">
                            <img src="{{ asset('./images/twitter.svg') }}" alt="">
                        </a>
                        <a class="inline-block px-1" href="#">
                            <img src="{{ asset('./images/instagram.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </template>

</section>
