@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class="max-w-xl lg:max-w-7xl mx-5 lg:mx-auto  mt-[100px] lg:mt-[150px]">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="relative my-10 h-[30vh] bg-cover bg-center flex justify-center items-center rounded-lg px-4"
            style="background-image: url('./images/about.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-70 rounded-lg"></div>

            <div class="flex flex-col items-center">


                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-white text-center z-30">
                    Protokos Publishers
                </h2>

                <p class="mt-1 text-white text-center z-30">
                    We'd love to talk about how we can help you.
                </p>
            </div>

        </div>

        {{-- px-4 sm:px-6 lg:px-8 --}}
        <div class="max-w-[85rem] mx-auto  py-10 space-y-8">



            <section class="py-10 relative" data-aos="fade-up" data-aos-duration="1200">
                {{-- md:px-5 lg:px-5 px-4 --}}
                <div class="w-full max-w-7xl   mx-auto">
                    <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                                <h2
                                    class="text-kemi-ojo font-semibold uppercase text-2xl md:text-4xl font-manrope leading-normal lg:text-start text-center">
                                    About Protokos Publishers?
                                </h2>
                                <p class="text-gray-800 text-base font-normal leading-relaxed lg:text-start text-center">
                                    When I was a student trying to study medical ultrasound, a classmate invited me for a
                                    weekend but said I must bring my ultrasound books. Instead of carrying the heavy
                                    ultrasound books on the trip, I wrote less than thirty questions which we worked
                                    through, but couldn’t finish the entire weekend! There were no revision books available
                                    then.



                                    After qualifying as a sonographer, I couldn’t get a job so I started writing more
                                    questions for myself and answering them. This later became the skeleton for ‘Obstetric
                                    and Gynaecological Ultrasound: A Self – Assessment Guide’. ISBN 978-0443064623. You may
                                    check the “Book Review” button below to read The Obstetrician & Gynaecologist
                                    www.rcog.org.uk reviews. This book has helped many to understand obstetrics and
                                    Gynaecology Ultrasound and pass their post graduate training examinations, be it as a
                                    Sonographer or as a Clinical Fellow in Obs. & Gynae.
                                    The other ultrasound books were written when I observed that ultrasound students and
                                    qualified colleagues were struggling in their practice. Each of the ultrasound books
                                    offer detailed guidance on how trainee or qualified colleagues can enhance their
                                    practice and offer the best services to the patients. Reviews are available on Amazon.
                                    I have been actively involved in training professional colleagues since 2005. The
                                    affordable Ultrasound books and courses are aimed at structured learning at the
                                    convenience and pace of the trainee or qualified colleagues.
                                </p>
                            </div>
                            <button
                                class="sm:w-fit w-full px-3.5 py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                            </button>
                        </div>
                        <img class="w-full lg:w-auto lg:mx-0 mx-auto h-full rounded-3xl object-cover"
                            src="{{ asset('/images/kemi-3.jpeg') }}" alt="about Us image" />
                    </div>
                </div>
            </section>

        </div>


        <section class="pt-10 pb-20">
            <div class="container mx-auto px-4">
                <div class="mx-auto mb-12 max-w-lg text-center lg:max-w-2xl">
                    <h2
                        class="font-heading text-kemi-ojo mt-2 text-3xl font-bold leading-tight md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight">
                        Book Preview
                    </h2>
                </div>
                <div class="mb-8 text-center lg:mb-16">
                    <button class="mb-4 mr-4 border-b-4 border-rose-700 pb-2 text-lg md:mb-0 lg:mr-12">
                        Library</button>
                    {{-- <button
                        class="mb-4 mr-4 border-b-4 border-transparent pb-2 text-lg hover:border-indigo-500 md:mb-0 lg:mr-12">
                        Dolor sit
                    </button>
                    <button
                        class="mb-4 mr-4 border-b-4 border-transparent pb-2 text-lg hover:border-indigo-500 md:mb-0 lg:mr-12">
                        Amet lorem
                    </button> --}}
                </div>
                <div class="-mx-2 flex flex-wrap">
                    <div class="flex w-full flex-wrap md:w-1/2 lg:h-screen">
                        <div class="h-64 w-1/2 p-2 lg:h-1/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/Ultrasound2-min.png') }}" alt="">
                        </div>
                        <div class="h-64 w-1/2 p-2 lg:h-1/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/ultrasound-min.png') }}" alt="">
                        </div>
                        <div class="h-96 w-full p-2 md:h-64 lg:h-2/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/Obstetrics-min.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex w-full flex-wrap md:w-1/2 lg:h-screen">
                        <div class="h-96 w-full p-2 md:h-64 lg:h-2/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/Obstetrics-min.png') }}" alt="">
                        </div>
                        <div class="h-64 w-1/2 p-2 lg:h-1/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/3rdscanlarger-300x475 (1).jpg') }}" alt="">
                        </div>
                        <div class="h-64 w-1/2 p-2 lg:h-1/3">
                            <img class="h-full w-full rounded-lg object-cover"
                                src="{{ asset('/images/NT-Scanning-min-1.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center w-full items-center mt-10">

                    <a href="{{ route('bookstore') }}"
                        class="group ui-btn gap-x-2 hover:bg-rose-800 hover:shadow-md hover:scale-95 transition bg-kemi-ojo max-w-sm">
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
    </main>
@endsection
