@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class=" lg:mx-auto" x-data="bookSearch()" x-init="initBooks()">
        {{-- Section --}}
        <div class="relative  h-[60vh] lg:h-[90vh]  bg-cover bg-center flex justify-center items-center px-4"
            style="background-image: url('./images/about.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-50"></div>

            <div class="flex flex-col items-center ">


                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-white text-center z-30"
                    style="font-family: 'neueMachina-ultrabold', sans-serif;">
                    Welcome to Protokos Publishers
                </h2>

                <div class="z-30 mt-10 flex flex-col w-full lg:max-w-md relative">
                    <div class="flex items-center w-full ">
                        <input type="text" class="w-full py-2.5 lg:py-4" id="searchInput" x-model="search"
                            placeholder="Search for books by Kemi Olaojo">


                        <button
                            class="w-3/12 lg:w-3/12 py-2.5 lg:py-4 bg-white border-none outline-none transition-all text-white flex gap-x-1 items-center justify-center">
                            <svg class="size-5 lg:size-6 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z" />
                            </svg>
                        </button>
                    </div>

                    <section id="books"
                        class="absolute top-12 md:top-14 w-full bg-white border-t border-kemi-ojo py-16 px-6"
                        x-show="search.length > 0" x-transition>

                        <template x-if="filteredBooks.length > 0">
                            <div class="grid grid-cols-1 gap-6 max-w-6xl mx-auto overflow-y-auto h-[300px]">
                                <template x-for="book in filteredBooks" :key="book.id">
                                    <div
                                        class="bg-gray-50 rounded-lg shadow hover:shadow-lg p-4 flex flex-col items-center text-center transition">
                                        <img :src="book.imgSrc" alt=""
                                            class="w-40 h-56 object-cover rounded mb-4">
                                        <h3 class="text-lg font-semibold mb-1" x-text="book.title"></h3>
                                        <p class="text-sm text-gray-600 mb-2" x-text="book.author"></p>
                                        <a :href="book.link" target="_blank"
                                            class="mt-auto text-indigo-600 hover:underline font-medium">
                                            View Book
                                        </a>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template x-if="filteredBooks.length === 0 && search.length > 0">
                            <div class="flex flex-col gap-y-2">

                                <div class="flex justify-center items-center">
                                    <svg class="fill-transparent" width="178" height="90" viewBox="0 0 178 90"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="27" y="50.5" width="124" height="39" rx="7.5"
                                            fill="currentColor" class="fill-white " />
                                        <rect x="27" y="50.5" width="124" height="39" rx="7.5"
                                            stroke="currentColor" class="stroke-gray-50 " />
                                        <rect x="34.5" y="58" width="24" height="24" rx="4"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="66.5" y="61" width="60" height="6" rx="3"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="66.5" y="73" width="77" height="6" rx="3"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="19.5" y="28.5" width="139" height="39" rx="7.5"
                                            fill="currentColor" class="fill-white " />
                                        <rect x="19.5" y="28.5" width="139" height="39" rx="7.5"
                                            stroke="currentColor" class="stroke-gray-100" />
                                        <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor"
                                            class="fill-gray-200 /70" />
                                        <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor"
                                            class="fill-gray-200 /70" />
                                        <rect x="59" y="51" width="92" height="6" rx="3" fill="currentColor"
                                            class="fill-gray-200 /70" />

                                        <defs>
                                            <filter id="filter19" x="0" y="0" width="178" height="64"
                                                filterUnits="userSpaceOnUse" colorInterpolationFilters="sRGB">
                                                <feFlood floodOpacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha" />
                                                <feOffset dy={6} />
                                                <feGaussianBlur stdDeviation="6" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_1187_14810" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_dropShadow_1187_14810" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>

                                <p class="text-center text-gray-500 max-w-6xl mx-auto ">
                                    No books found for your
                                    search.</p>
                            </div>

                        </template>
                    </section>

                    <ul id="dropdown"
                        class="absolute top-14  w-full bg-white border rounded-md mt-1 hidden max-h-40 
                            overflow-auto shadow-md">

                    </ul>


                </div>

                <div class="absolute bottom-0">
                    <button class="animate-bounce size-20 mt-10 cursor-pointer"
                        @click="$el.scrollIntoView({ behavior: 'smooth', block: 'start' }); $nextTick(() => document.querySelector('#kemi-olaojo-books').scrollIntoView({ behavior: 'smooth' }))">
                        <svg class="size-10 fill-white" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                            <path
                                d="M23.970703 4.9726562 A 2.0002 2.0002 0 0 0 22 7L22 36.171875L11.414062 25.585938 A 2.0002 2.0002 0 1 0 8.5859375 28.414062L22.585938 42.414062 A 2.0002 2.0002 0 0 0 25.414062 42.414062L39.414062 28.414062 A 2.0002 2.0002 0 1 0 36.585938 25.585938L26 36.171875L26 7 A 2.0002 2.0002 0 0 0 23.970703 4.9726562 z" />
                        </svg>
                    </button>
                </div>


            </div>

        </div>
        {{-- End of Section --}}


        <div
            style="bottom: calc(100% - min(var(--framer-viewport-height, 100%), 100%) - .5px);flex: none;left: 0;order: 1008;pointer-events: none;position: fixed;right: 0;top: 0;z-index: 10;">
            <div
                style="width: 100%;height: 100%;background-size: 128px;background-repeat: repeat;background-image: url('/images/grainy-noise.png');opacity: 0.06;border-radius: 0;">
            </div>
        </div>




        <section class="pb-20 pt-40" id="kemi-olaojo-books">
            <div class="container mx-auto px-4">
                <div class="mx-auto mb-12 max-w-lg text-center lg:max-w-2xl">
                    <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                        class=" text-kemi-ojo mt-2 text-3xl font-bold leading-tight md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight">
                        Books by Kemi Olaojo
                    </h2>
                </div>

                <div class=" flex justify-center">
                    <div
                        class="grid grid-cols-2 gap-y-8 md:grid-cols-3 lg:grid-cols-3 lg:gap-x-5 max-w-xl lg:max-w-7xl justify-center items-center">

                        @foreach ($ingramSparkBooks as $book)
                            <div class="px-4 py-4 rounded-2xl">
                                <img class="w-full rounded-2xl object-contain mb-4 md:mb-10"
                                    src="{{ $book['imgSrc'] }}" />
                                <div class="flex flex-col">
                                    <div class="text-gray-600 text-sm md:text-xl font-semibold">
                                        {{ $book['title'] }}
                                    </div>
                                    <div class="text-gray-600">
                                        <span>Authors:</span>
                                        <div class="">
                                            {{ $book['author'] }}
                                        </div>
                                    </div>
                                    <div>
                                        <a class="w-full bg-kemi-ojo hover:bg-blue-700 text-white block text-center p-2 md:p-3 rounded-xl"
                                            href="{{ $book['link'] }}" target="_blank">Buy
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    About Protokos Publishers
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
                        <img class="w-full object-contain" src="{{ asset('/images/protokos-21-years.jpeg') }}"
                            alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Section --}}


    </main>
@endsection

@section('app-script')
    <script>
        function bookSearch() {
            return {
                search: '',
                books: [],
                get filteredBooks() {
                    if (!this.search) return this.books;
                    const term = this.search.toLowerCase();
                    return this.books.filter(book =>
                        book.title.toLowerCase().includes(term) ||
                        book.author.toLowerCase().includes(term)
                    );
                },
                initBooks() {
                    this.books = @json($ingramSparkBooks);
                }
            };
        }
    </script>
@endsection

{{-- @section('app-script')
    <script>
        const data = @json($data);

        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const dropdown = document.getElementById("dropdown");

            searchInput.addEventListener("input", function() {
                const query = this.value.trim().toLowerCase();
                dropdown.innerHTML = "";

                if (query.length === 0) {
                    dropdown.classList.add("hidden");
                    return;
                }

                const filtered = data.filter(item => item.name.toLowerCase().includes(query));

                if (filtered.length === 0) {
                    dropdown.innerHTML = "<li class='p-2 text-gray-500'>No results found</li>";
                } else {
                    filtered.forEach(item => {
                        const li = document.createElement("li");
                        li.textContent = item.name;
                        li.classList.add("p-2", "cursor-pointer", "hover:bg-gray-200");

                        // Redirect on click
                        li.addEventListener("click", function() {
                            window.location.href = `/search/${item.id}`;
                        });

                        dropdown.appendChild(li);
                    });
                }

                dropdown.classList.remove("hidden");
            });

            // Hide dropdown when clicking outside
            document.addEventListener("click", function(event) {
                if (!searchInput.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>
@endsection --}}
