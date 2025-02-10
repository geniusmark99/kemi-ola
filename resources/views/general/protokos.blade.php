@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    {{-- max-w-xl lg:max-w-7xl mx-5 mt-[100px] lg:mt-[150px]  h-[50vh] lg:h-[70vh] --}}
    <main class=" lg:mx-auto ">
        {{-- Section --}}
        <div class="relative  h-[60vh] lg:h-[90vh]  bg-cover bg-center flex justify-center items-center px-4"
            style="background-image: url('./images/about.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-50"></div>

            <div class="flex flex-col items-center">


                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-white text-center z-30"
                    style="font-family: 'neueMachina-ultrabold', sans-serif;">
                    Welcome to Protokos Publishers
                </h2>

                <div class="z-30 mt-10 flex flex-col gap-y-10 w-full lg:max-w-md">
                    <div class="flex items-center w-full ">
                        <input type="text" class="w-9/12 lg:w-10/12 py-2.5 lg:py-4"
                            placeholder="Search for books by Kemi Olaojo">
                        <button
                            class="w-3/12 lg:w-3/12 py-2.5 lg:py-4 bg-kemi-ojo hover:kemi-ojo-bg transition-all text-white flex gap-x-1 items-center justify-center">
                            <svg class="size-5 lg:size-6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" fill="#FFFFF5">
                                <path
                                    d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z"
                                    fill="#FFFFF5" />
                            </svg>
                            Search
                        </button>
                    </div>
                    <div class="flex items-center">
                        {{-- <ul class="grid grid-cols-2 md:grid-cols-4 gap-5 lg:gap-10 lg:flex-row list-none">
                            <li><a href="#"
                                    class="magnetic-btn  bg-kemi-ojo shadow-md px-2 py-2.5 text-sm text-white tracking-wide uppercase">
                                    Ultrasound books
                                </a></li>

                            <li><a href="#"
                                    class="magnetic-btn bg-kemi-ojo shadow-md px-2 py-2.5 text-sm text-white tracking-wide uppercase">
                                    Ultrasound books
                                </a></li>


                            <li><a href="#"
                                    class="magnetic-btn bg-kemi-ojo shadow-md px-2 py-2.5 text-sm text-white tracking-wide uppercase">
                                    Ultrasound books
                                </a></li>


                            <li><a href="#"
                                    class="magnetic-btn bg-kemi-ojo shadow-md px-2 py-2.5 text-sm text-white tracking-wide uppercase">
                                    Ultrasound books
                                </a></li>
                        </ul> --}}
                    </div>
                </div>


            </div>

        </div>
        {{-- End of Section --}}



        <section class="pt-10 pb-20" style="background-image: url('/images/grainy-noise.svg');">
            <div class="container mx-auto px-4">
                <div class="mx-auto mb-12 max-w-lg text-center lg:max-w-2xl">
                    <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                        class=" text-kemi-ojo mt-2 text-3xl font-bold leading-tight md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight">
                        Books by Kemi Olaojo
                    </h2>
                </div>

                <div class=" flex justify-center">

                    <div
                        class="grid grid-cols-2 gap-y-8 md:grid-cols-3 lg:grid-cols-4 lg:gap-x-5 max-w-xl lg:max-w-7xl justify-center items-center">

                        <div>
                            <img class="w-full rounded-lg object-cover h-[300px] lg:h-[500px]"
                                src="{{ asset('/images/Obstetrics-min.png') }}">
                            <div class="flex flex-col gap-y-1 mt-5"
                                style="font-family: 'neueMontreal-semibolditalic', san-serif;">
                                <p class="text-gray-700">Obsterics and Gynaecology Ultrasound</p>
                                <h2 class="text-gray-800">By Kemi Olaojo</h2>
                            </div>
                        </div>


                        <div>
                            <img class="w-full rounded-lg object-cover h-[300px] lg:h-[500px]"
                                src="{{ asset('/images/3rdscanlarger-300x475 (1).jpg') }}">
                            <div class="flex flex-col gap-y-1 mt-5"
                                style="font-family: 'neueMontreal-semibolditalic', san-serif;">
                                <p class="text-gray-700">3rd Trimester Scan for the Ultrasound</p>
                                <h2 class="text-gray-800">By Kemi Olaojo</h2>
                            </div>
                        </div>

                        <div>
                            <img class="w-full rounded-lg object-cover h-[300px] lg:h-[500px]"
                                src="{{ asset('/images/NT-Scanning-min-1.png') }}">
                            <div class="flex flex-col gap-y-1 mt-5"
                                style="font-family: 'neueMontreal-semibolditalic', san-serif;">
                                <p class="text-gray-700">NT Scanning for the Beginner</p>
                                <h2 class="text-gray-800">By Kemi Olaojo</h2>
                            </div>
                        </div>

                        <div>
                            <img class="w-full rounded-lg object-cover h-[300px] lg:h-[500px]"
                                src="{{ asset('/images/Ultrasound2-min.png') }}">
                            <div class="flex flex-col gap-y-1 mt-5"
                                style="font-family: 'neueMontreal-semibolditalic', san-serif;">
                                <p class="text-gray-700">Ultrasound services in an Early Pregnancy</p>
                                <h2 class="text-gray-800">By Kemi Olaojo</h2>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="flex justify-center w-full items-center mt-10">

                    <a href="{{ route('bookstore') }}"
                        class="group magnetic-btn ui-btn gap-x-2 hover:kemi-ojo-bg hover:shadow-md hover:scale-95 transition bg-kemi-ojo max-w-sm">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M13.5 4C10.467 4 8 6.467 8 9.5L8 37L8 37.5L8 38.5C8 41.519774 10.480226 44 13.5 44L39.5 44 A 1.50015 1.50015 0 1 0 39.5 41L13.5 41C12.273237 41 11.277238 40.152347 11.050781 39L39.5 39C40.329 39 41 38.329 41 37.5L41 9.5C41 6.467 38.533 4 35.5 4L13.5 4 z M 16.5 16L32.5 16C33.329 16 34 16.671 34 17.5C34 18.329 33.329 19 32.5 19L16.5 19C15.671 19 15 18.329 15 17.5C15 16.671 15.671 16 16.5 16 z M 16.5 23L29.5 23C30.329 23 31 23.671 31 24.5C31 25.329 30.329 26 29.5 26L16.5 26C15.671 26 15 25.329 15 24.5C15 23.671 15.671 23 16.5 23 z" />
                        </svg>

                        Get books from store

                        <svg class="size-5 opacity-0 fill-white group-hover:opacity-100 -translate-x-2 transition group-hover:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M4,26h35.172l-6.586,6.586c-0.781,0.781-0.781,2.047,0,2.828C32.977,35.805,33.488,36,34,36s1.023-0.195,1.414-0.586l10-10 C45.789,25.04,46,24.531,46,24s-0.211-1.039-0.586-1.414l-10-10c-0.781-0.781-2.047-0.781-2.828,0 c-0.781,0.781-0.781,2.047,0,2.828L39.172,22H4c-1.104,0-2,0.896-2,2S2.896,26,4,26z" />
                        </svg>
                    </a>

                </div>

            </div>
        </section>


        {{-- Section --}}
        <div style="background-image: url('/images/grainy-noise.svg');" class="py-20 border-t border-kemi-ojo">

            <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
                <h1 style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-3xl md:text-4xl lg:text-7xl text-center lg:leading-14 uppercase font-extrabold drop-shadow-md bg-clip-text text-transparent bg-gradient-to-r from-kemi-ojo to-kemi-ojo-purple">
                    About Protokos Publishers?
                </h1>


                <div
                    class="flex flex-col w-full lg:flex-row gap-y-10 lg:gap-y-0 justify-center items-start lg:gap-x-20 mt-10">
                    <div class="w-full lg:w-6/12 flex flex-col gap-y-5">

                        <p class="mt-3 text-lg text-kemi-ojo leading-8">
                            When I was a student trying to study medical ultrasound, a classmate invited me for a
                            weekend but said I must bring my ultrasound books. Instead of carrying the heavy
                            ultrasound books on the trip, I wrote less than thirty questions which we worked
                            through, but couldn&apos;t finish the entire weekend! There were no revision books available
                            then.
                        </p>



                        <p class="mt-3 text-lg text-kemi-ojo leading-8">
                            After qualifying as a sonographer, I couldn&apos;t get a job so I started writing more
                            questions for myself and answering them. This later became the skeleton for

                            <b class="italic">
                                &apos;Obstetric
                                and Gynaecological Ultrasound: A Self – Assessment Guide&apos;. ISBN 978-0443064623.
                            </b>
                            You may
                            check the “Book Review” button below to read The Obstetrician & Gynaecologist
                            www.rcog.org.uk reviews. This book has helped many to understand obstetrics and
                            Gynaecology Ultrasound and pass their post graduate training examinations, be it as a
                            Sonographer or as a Clinical Fellow in Obs. & Gynae.
                        </p>

                        <p class="mt-3 text-lg text-kemi-ojo leading-8">
                            The other ultrasound books were written when I observed that ultrasound students and
                            qualified colleagues were struggling in their practice. Each of the ultrasound books
                            offer detailed guidance on how trainee or qualified colleagues can enhance their
                            practice and offer the best services to the patients. Reviews are available on Amazon.
                            I have been actively involved in training professional colleagues since 2005. The
                            affordable Ultrasound books and courses are aimed at structured learning at the
                            convenience and pace of the trainee or qualified colleagues.
                        </p>




                        <p class="mt-3 text-lg text-kemi-ojo leading-8">
                            Beyond medical imaging, she is a prolific author across multiple genres, known for her simple
                            yet
                            profound writing style. Her works are engaging, practical, and deeply inspiring, reflecting her
                            passion
                            for impacting lives through knowledge and wisdom.
                            Explore her books and resources to learn, grow, and be inspired!
                        </p>




                    </div>
                    <div class="hidden lg:block lg:border-l border-kemi-ojo w-[1px] bg-kemi-ojo h-screen"></div>

                    <div class="lg:col-span-4 w-full flex justify-center lg:w-6/12">
                        <img class="w-full object-contain" src="{{ asset('/images/kemi-3.jpeg') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Section --}}


    </main>
@endsection
