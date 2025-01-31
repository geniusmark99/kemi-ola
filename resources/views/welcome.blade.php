@extends('layouts.app')
@section('app-title', 'Kemi Olaojo')
@section('app-style')
    <link rel="stylesheet" href="{{ asset('/styles/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/styles/aos.css') }}">
    <style>

    </style>
@endsection
@section('app-content')
    <div class="relative mb-[15rem] lg:mb-20">

        <x-swiper-widget />

        <div
            class="flex px-5 lg:px-40 flex-col gap-y-5 lg:gap-x-10 lg:flex-row justify-between -bottom-[15rem] lg:-bottom-20  absolute z-30 w-full">

            <div class="bg-kemi-ojo rounded-md p-2 h-[80px] lg:h-[100px] w-full lg:w-4/12 bg-no-repeat bg-cover shadow-md shadow-kemi-ojo/50"
                style="background-image: url('/images/open_book.svg'); background-size: 50%">
                <div class="text-3xl lg:text-4xl font-semibold text-center text-white">24+ Books</div>
                <div class="text-center text-white italic">
                    Twenty four Books Published
                </div>
            </div>

            <div class="bg-kemi-ojo rounded-md p-2 h-[80px] lg:h-[100px] w-full lg:w-4/12 bg-no-repeat bg-cover shadow-md shadow-kemi-ojo/50"
                style="background-image: url('/images/laurel_wreath.svg'); background-size: 50%">
                <div class="text-3xl lg:text-4xl font-semibold text-center text-white">25 years</div>
                <div class="text-center text-white italic">
                    Over Twenty five years
                </div>
            </div>

            <div class="bg-kemi-ojo rounded-md p-2 h-[80px] lg:h-[100px] w-full lg:w-4/12 bg-no-repeat bg-cover shadow-md shadow-kemi-ojo/50"
                style="background-image: url('/images/Certificate.svg'); background-size: 50%">
                <div class="text-3xl lg:text-4xl font-semibold text-center text-white">90% Books</div>
                <div class="text-center text-white italic">
                    Twenty four Books Published
                </div>
            </div>

        </div>
    </div>


    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 data-aos="fade-up" data-aos-duration="1000"
            class="block text-2xl font-bold text-kemi-ojo sm:text-3xl md:text-4xl text-center py-10">About me</h1>
        <div class="flex flex-col w-full lg:flex-row  justify-center lg:gap-x-20">
            <div class="w-full lg:w-6/12">
                <h1 data-aos="fade-up" data-aos-duration="1000"
                    class="block font-bold text-kemi-ojo sm:text-2xl text-center md:text-3xl lg:text-4xl">Welcome to my
                    World!
                </h1>
                <p data-aos="fade-up" data-aos-duration="1200" class="mt-3 text-lg text-kemi-ojo-light">
                    Oluwakemi Ola-Ojo is a prolific writer, an excellent teacher-coach benefitting others with her knowledge
                    through various means including pedagogy, coaching, and mentoring. She is set to positively impact the
                    world through Holy Spirit inspired, life changing e-books, print and videos, which address areas of
                    needs in the society.
                </p>

                <!-- Features -->
                <div data-aos="fade-up" data-aos-duration="1000"
                    class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Grid -->
                    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                        <div class="lg:col-span-12">
                            <!-- Grid -->
                            <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center justify-center lg:-translate-x-10">
                                <div data-aos="fade-up" data-aos-duration="1000" class="col-span-4">
                                    <img class="rounded-xl" src="{{ asset('/images/kemi-3.jpeg') }}"
                                        alt="Kemi olaojo picture">
                                </div>
                                <!-- End Col -->

                                <div data-aos="fade-up" data-aos-duration="1200" class="col-span-3">
                                    <img class="rounded-xl" src="{{ asset('/images/kemi-4.jpeg') }}"
                                        alt="Kemi olaojo picture">
                                </div>
                                <!-- End Col -->

                                <div data-aos="fade-up" data-aos-duration="1400" class="col-span-5">
                                    <img class="rounded-xl" src="{{ asset('/images/kemi-2.jpeg') }}" alt="Features Image">
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- End Col -->

                        <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-12">
                            <div data-aos="fade-up" data-aos-duration="1000" class="space-y-6 sm:space-y-8">
                                <!-- Title -->
                                <div class="space-y-2 md:space-y-4">
                                    <h2 class="font-bold text-3xl lg:text-4xl text-kemi-ojo">
                                        Be Inspired by Dr. Kemi Olaojo
                                    </h2>

                                </div>
                                <!-- End Title -->

                                <!-- List -->
                                <ul class="space-y-2 sm:space-y-4">
                                    <li class="flex gap-x-3">
                                        <span
                                            class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo 
                                            text-white ">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                        </span>
                                        <div class="grow">
                                            <span class="text-sm sm:text-base text-kemi-ojo/80 font-bold">
                                                A woman of Faith and Love
                                            </span>
                                        </div>
                                    </li>

                                    <li class="flex gap-x-3">
                                        <span
                                            class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo text-white ">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                        </span>
                                        <div class="grow">
                                            <span class="text-sm sm:text-base text-kemi-ojo/80 font-bold">
                                                A Veteran Professional Sonographer
                                            </span>
                                        </div>
                                    </li>

                                    <li class="flex gap-x-3">
                                        <span
                                            class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo text-white">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                        </span>
                                        <div class="grow">
                                            <span class="text-sm sm:text-base text-kemi-ojo/80 font-bold">
                                                An excellence author and publisher
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Features -->


            </div>

            <div data-aos="fade-up" data-aos-duration="1000"
                class="lg:col-span-4 w-full flex justify-center mt-10 lg:w-6/12 ">
                <img class=" rounded-xl w-full object-contain" src="{{ asset('images/bg003.jpg') }}" alt="Hero Image">
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Hero -->
    <div class="relative overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="max-w-2xl text-center mx-auto">
                <h1 data-aos="fade-up" data-aos-duration="1000"
                    class="block text-3xl font-bold text-kemi-ojo sm:text-4xl md:text-5xl ">
                    Our Platforms
                </h1>
                <p data-aos="fade-up" data-aos-duration="1000" class="mt-3 text-lg text-kemi-ojo">
                    Explore Our World
                </p>
            </div>

            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card -->
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="group flex flex-col h-full bg-white border overflow-hidden border-gray-200 shadow-sm rounded-xl">
                        <div class="h-52 flex flex-col justify-center items-center  rounded-t-xl bg-cover bg-no-repeat"
                            style="background-image:  url('/images/Protokos-publisher-logo.png')">

                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold text-kemi-ojo-light">
                                Protokos Publishers
                            </h3>
                            <p class="mt-3 text-gray-500 dark:text-neutral-500">
                                Protokos Publishers transforms ideas into impactful stories and knowledge.
                            </p>
                        </div>
                        <div class="mt-auto flex border-t  border-gray-200 divide-x divide-gray-200">
                            <a class="w-full  py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white hover:bg-kemi-ojo hover:text-white transition-all text-gray-800  shadow-sm  focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('protokos') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div data-aos="fade-up" data-aos-duration="1200"
                        class="group flex flex-col h-full bg-white overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="h-52 flex flex-col justify-center items-center bg-kemi-ojo rounded-t-xl bg-cover"
                            style="background-image:  url('/images/favour-online-logo-2.jpg')">
                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold text-kemi-ojo-light">
                                Favour Store
                            </h3>
                            <p class="mt-3 text-gray-500 dark:text-neutral-500">
                                Discover elegance and convenience at Favor Store. Shop our diverse range of top-quality
                                products
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white hover:bg-kemi-ojo hover:text-white transition-all text-gray-800 shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('favour') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->



                    <!-- Card -->
                    <div data-aos="fade-up" data-aos-duration="1400"
                        class="group flex flex-col h-full bg-white overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="h-52 overflow-hidden flex flex-col justify-center items-center bg-kemi-ojo rounded-t-xl bg-cover bg-no-repeat"
                            style="background-image:  url('/images/protokos-logo.png')">

                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold text-kemi-ojo-light">
                                Protokos Medicals
                            </h3>
                            <p class="mt-3 text-gray-500 dark:text-neutral-500">
                                Master the art of diagnostic imaging with Ultrasound Training. Gain expert skills, practical
                                experience, and the credentials to advance your medical career
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white hover:bg-kemi-ojo hover:text-white transition-all text-gray-800 shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('medical') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->


                    <!-- Card -->
                    <div data-aos="fade-up" data-aos-duration="1600"
                        class="group flex flex-col h-full bg-white overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="h-52 flex flex-col overflow-hidden justify-center items-center rounded-t-xl bg-cover"
                            style="background-image:  url('/images/ede-yoruba.jpg')">
                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold text-kemi-ojo-light">
                                Ẹ̀kọ́ Èdè Yorùbá
                            </h3>
                            <p class="mt-3 text-gray-500 dark:text-neutral-500">
                                Master the art of diagnostic imaging with Ultrasound Training. Gain expert skills, practical
                                experience, and the credentials to advance your medical career
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white hover:bg-kemi-ojo hover:text-white transition-all text-gray-800 shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('ede-yoruba') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->




                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->


        </div>
    </div>
    <!-- End Hero -->

    <!-- Testimonials -->
    <div class="overflow-hidden bg-kemi-ojo" data-aos="fade-up" data-aos-duration="1000">
        <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            {{-- <div class="max-w-2xl w-3/4 lg:w-1/2 mb-6 sm:mb-10 md:mb-16"> --}}
            <div class="flex justify-center items-center pb-10">
                <h2 class="text-xl sm:text-2xl lg:text-3xl text-white font-semibold text-center">
                    Loved by business and individuals across the globe
                </h2>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-rose-100 rounded-xl">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800">
                                "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly impacted
                                my career. Her dedication to excellence and her ability to inspire others are unmatched."
                            </p>
                        </div>

                        <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800 ">
                                        Josh Tyson
                                    </p>
                                    <p class="text-xs text-gray-800">
                                        Product Manager | Capsule
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-rose-100 rounded-xl">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800">
                                "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly impacted
                                my career. Her dedication to excellence and her ability to inspire others are unmatched."
                            </p>
                        </div>

                        <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800">
                                        Mark Okechukwu
                                    </p>
                                    <p class="text-xs text-gray-600">
                                        Founder and CEO | S.I.T
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex h-auto">
                    <div class="flex flex-col bg-rose-100 rounded-xl">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic md:text-lg text-gray-800">
                                "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly impacted
                                my career. Her dedication to excellence and her ability to inspire others are unmatched."

                            </p>
                        </div>

                        <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                            <div class="flex items-center gap-x-3">
                                <div class="shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                        alt="Avatar">
                                </div>

                                <div class="grow">
                                    <p class="text-sm sm:text-base font-semibold text-gray-800">
                                        Alisa Williams
                                    </p>
                                    <p class="text-xs text-gray-800">
                                        Entrepreneur | Happy customer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Grid -->


            <!-- SVG Element -->
            <div class="absolute bottom-0 end-0 transform lg:translate-x-32" aria-hidden="true">
                <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z"
                        fill="currentColor" class="fill-orange-500" />
                    <path
                        d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z"
                        fill="currentColor" class="fill-cyan-500" />
                    <path
                        d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z"
                        fill="currentColor" class="fill-white" />
                </svg>
            </div>
            <!-- End SVG Element -->
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <!-- Gradients -->
        <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
            <div
                class="bg-gradient-to-r from-rose-500/50 to-red-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] 
                transform -translate-x-[10rem]">
            </div>
            <div
                class="bg-gradient-to-tl from-indigo-50  via-purple-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] 
                rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] 
        ">
            </div>
        </div>
        <!-- End Gradients -->

        <div class="relative z-10">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                <div class="max-w-2xl text-center mx-auto">
                    {{-- <p
                        class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                        What Happy Clients
                    </p> --}}

                    <p class="inline-block text-sm font-medium text-kemi-ojo">
                        What Happy Clients
                    </p>
                    <!-- Title -->
                    <div class="mt-5 max-w-2xl">
                        <h1 class="block font-semibold text-kemi-ojo text-2xl md:text-3xl lg:text-4xl">
                            what people say about Kemi
                            Ola-Ojo's books and platforms.
                        </h1>
                    </div>
                    <!-- End Title -->



                    <!-- Buttons -->
                    <div class="mt-8 gap-3 flex justify-center">
                        <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border 
                        border-transparent bg-kemi-ojo text-white hover:bg-kemi-ojo focus:outline-none 
                        focus:bg-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ route('contact') }}">
                            Contact me
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>

                    </div>
                    <!-- End Buttons -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->


    <div class="max-w-6xl pb-10 px-4 sm:px-6 lg:px-8 md:pb-20 mx-auto">
        <div
            class="bg-kemi-ojo relative rounded-xl p-5 sm:py-16 before:absolute before:top-0 before:start-0 
            before:bg-[url('../../assets/svg/component/banner-bg-gray.svg')] 
           
            before:bg-no-repeat before:bg-top before:bg-contain before:w-2/3 before:h-full before:z-0">
            <div class="max-w-xl relative z-10 text-center mx-auto">
                <div class="mb-5">
                    <h2 class="text-2xl font-bold md:text-3xl dark:text-white">Subscribe</h2>
                    <p class="mt-3 text-purple-300 font-medium">Get all the latest Dr. Kemi Olaojo updates and newsletters.
                    </p>
                </div>

                <div id="mc_embed_signup">
                    <form
                        action="https://praline.us10.list-manage.com/subscribe/post?u=eddd28397383718c2f15e15c2&amp;id=b97f8fe839"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                        class="validate" target="_blank" novalidate="novalidate">
                        <div id="mc_embed_signup_scroll">
                            <div class="flex flex-col sm:flex-row gap-3">
                                <input type="email" value="" name="EMAIL" id="mce-EMAIL"
                                    class="block w-full text-gray-700 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 
                                    disabled:opacity-50 disabled:pointer-events-none "
                                    placeholder="Email address">
                                <input type="submit" name="subscribe"
                                    class="py-3 cursor-pointer px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent 
                                    bg-kemi-ojo-light hover:bg-white text-white hover:text-kemi-ojo transition-all hover:scale-95  focus:outline-none 
                                    focus:bg-rose-700 disabled:opacity-50 disabled:pointer-events-none">
                            </div>

                            <div id="mce-responses" class="mt-3 text-gray-500 dark:text-neutral-400">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                    name="b_eddd28397383718c2f15e15c2_b97f8fe839" tabindex="-1" value=""></div>
                        </div>
                    </form>
                </div>
                <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                <script type="text/javascript">
                    (function($) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = 'EMAIL';
                        ftypes[0] = 'email';
                        fnames[1] = 'FNAME';
                        ftypes[1] = 'text';
                        fnames[2] = 'LNAME';
                        ftypes[2] = 'text';
                        fnames[3] = 'ADDRESS';
                        ftypes[3] = 'address';
                        fnames[4] = 'PHONE';
                        ftypes[4] = 'phone';
                        fnames[5] = 'BIRTHDAY';
                        ftypes[5] = 'birthday';
                    }(jQuery));
                    var $mcj = jQuery.noConflict(true);
                </script>
                <!--End mc_embed_signup-->
            </div>
        </div>
    </div>
@endsection

@section('app-script')
    <script src="{{ asset('/scripts/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    <script>
        AOS.init({
            once: true,
            easing: "ease-in-out",
        });

        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                effect: 'fade', // You can change this to 'slide', 'cube', 'coverflow', etc.
            });
        });
    </script>
@endsection
