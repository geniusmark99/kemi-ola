@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class="lg:mx-auto  mt-[70px] lg:mt-[90px]">

        <section class="h-auto lg:h-[80vh]  text-white  px-5 py-6  lg:px-20 mb-20">
            <div class="flex flex-col-reverse lg:flex-row gap-y-10 lg:gap-x-20  h-full">

                <div class="w-full lg:w-6/12 flex flex-col gap-y-5 justify-center ">
                    <div class="grid grid-cols-3 lg:mx-10 md:grid-cols-3 lg:min-w-[600px] lg:h-[400px] "
                        style="font-family: 'neueMachina-ultrabold', sans-serif;">
                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-5xl border border-black rounded-full flex justify-center items-center col-span-1">
                            Speak</div>

                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-5xl border border-black rounded-full flex justify-center items-center col-span-2">
                            Yoruba</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-2xl bg-teal-600 md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center col-span-2">
                            Language</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center">
                            With</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-2xl bg-fuchsia-600 tracking-wide md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center col-span-2 w-[110%] lg:w-[550px]">
                            Confidence.
                        </div>

                    </div>
                    <div class="max-w-md text-black lg:mx-10">
                        Learn to speak Yoruba with confidence. We offer a wide range of Yoruba language learning
                    </div>
                    <div class="lg:mx-10">
                        <button
                            class="magnetic-btn rounded-full relative px-4 py-3.5 bg-black lg:w-[200px] text-center shadow-md transition-all hover:shadow-black/30 ">
                            <div
                                class="rounded-full border w-full border-black -z-10 absolute px-4 py-6 top-1.5 left-0.5 lg:w-[200px] text-center ">
                            </div>
                            Start Learning

                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 h-[60vh]  gap-y-14 flex flex-col justify-center items-center  lg:mt-0">

                    <div style="background-image: url('./images/world.svg');"
                        class="grid relative grid-cols-2 justify-center items-center md:grid-cols-3 w-full lg:w-[600px] h-[300px] lg:h-[350px] bg-cover lg:bg-contain bg-no-repeat">

                        <div class="magnetic-btn flex flex-col gap-y-2 absolute  md:left-10">

                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Báwo ni?
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-32 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/black-smiling-man.jpg')"></div>
                        </div>
                        <div class="magnetic-btn flex flex-col gap-y-2 top-0 absolute right-40">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Ẹ ṣeun
                                <div
                                    class="absolute   -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 md:size-24 lg:size-28 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/fair-smiling-man.jpg')"></div>
                        </div>
                        <div class="magnetic-btn flex flex-col gap-y-2 absolute -bottom-8 left-44 md:bottom-0">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Mo fẹ́ rà èyí
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 lg:size-32 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/black-smiling-old-lady.jpg')"></div>
                        </div>
                        <div
                            class="magnetic-btn flex flex-col gap-y-2 absolute top-0 right-[10px] lg:top-0 lg:right-[300px]">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Wa, ni bi
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/black-smiling-lady.jpg')"></div>
                        </div>
                    </div>

                    <button id="scroll-btn" class="text-white flex flex-col gap-y-2 justify-center items-center  lg:mt-10">
                        <svg class="size-8 animate-bounce fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                            <path
                                d="M25 0C15.070313 0 7 8.070313 7 18L7 24.6875C6.941406 24.882813 6.941406 25.085938 7 25.28125L7 32C7 41.929688 15.070313 50 25 50C34.929688 50 43 41.929688 43 32L43 25.1875C43.027344 25.054688 43.027344 24.914063 43 24.78125L43 18C43 8.070313 34.929688 0 25 0 Z M 25 2C33.847656 2 41 9.152344 41 18L41 24L9 24L9 18C9 9.152344 16.152344 2 25 2 Z M 24.90625 4.96875C24.863281 4.976563 24.820313 4.988281 24.78125 5C24.75 5.007813 24.71875 5.019531 24.6875 5.03125C24.65625 5.039063 24.625 5.050781 24.59375 5.0625C24.527344 5.097656 24.464844 5.140625 24.40625 5.1875C24.363281 5.214844 24.320313 5.246094 24.28125 5.28125C24.234375 5.328125 24.191406 5.382813 24.15625 5.4375L20.28125 9.28125C19.882813 9.679688 19.882813 10.320313 20.28125 10.71875C20.679688 11.117188 21.320313 11.117188 21.71875 10.71875L24 8.4375L24 17.5625L21.71875 15.28125C21.476563 15.03125 21.121094 14.925781 20.78125 15C20.40625 15.066406 20.105469 15.339844 20 15.703125C19.894531 16.070313 20.003906 16.460938 20.28125 16.71875L24.28125 20.71875C24.46875 20.914063 24.730469 21.023438 25 21.023438C25.269531 21.023438 25.53125 20.914063 25.71875 20.71875L29.71875 16.71875C30.117188 16.320313 30.117188 15.679688 29.71875 15.28125C29.320313 14.882813 28.679688 14.882813 28.28125 15.28125L26 17.5625L26 8.4375L28.28125 10.71875C28.679688 11.117188 29.320313 11.117188 29.71875 10.71875C30.117188 10.320313 30.117188 9.679688 29.71875 9.28125L25.84375 5.4375C25.808594 5.382813 25.765625 5.328125 25.71875 5.28125C25.574219 5.136719 25.390625 5.035156 25.1875 5C25.097656 4.976563 25 4.964844 24.90625 4.96875 Z M 9 26L41 26L41 32C41 40.847656 33.847656 48 25 48C16.152344 48 9 40.847656 9 32Z" />
                        </svg>
                        <span class="text-kemi-ojo">Scroll down</span>
                    </button>
                </div>
            </div>
        </section>


        <div class="relative  h-[30vh] bg-cover bg-center flex justify-center items-center  px-4"
            style="background-image: url('./images/background-kemi-platforms-5-min.jpeg');">

            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-70 rounded-lg">
            </div>


            <div class="flex flex-col items-center">

                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-gray-200 text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá</h2>
                <p class="mt-1 text-white text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn ní Ilé Ẹ̀kọ́ Yorùbá:
                </p>
            </div>

        </div>

        <section id="next-section" class="h-[90vh] lg:h-screen justify-center bg-[#FEFAE9] text-white">
            <div class="flex flex-col lg:flex-row items-center w-full lg:mx-20 lg:items-center lg:justify-center">
                <div class="w-full lg:w-6/12 flex justify-center py-10">

                    <div class="flex gap-x-2 lg:gap-x-6">
                        <div class="border rounded-full border-black shadow-sm h-[200px] lg:h-[350px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                            style="background-image: url('./images/black-smiling-man.jpg');">
                        </div>

                        <div class="flex flex-col gap-y-5  items-center w-[100px] lg:w-[150px]">

                            <div class="border rounded-full  border-black shadow-sm h-[150px] pb-20 lg:h-[300px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                                style="background-image: url('./images/black-smiling-old-lady.jpg');">
                            </div>
                            <div class="h-[50px] lg:h-[80px]">
                                <div class="flex items-center gap-x-2 -space-x-7">
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/usa.svg')">
                                    </div>
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/great_britain.svg')"></div>
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/germany.svg')">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-full border-black shadow-sm h-[200px] lg:h-[350px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                            style="background-image: url('./images/black-smiling-lady.jpg');">
                        </div>
                    </div>
                    <div class="flex"></div>
                </div>
                <div class="w-full lg:w-6/12 ">
                    <div class="flex flex-col -inset-1 items-center  justify-center lg:justify-start lg:items-start">
                        <h1 class="flex text-3xl lg:text-7xl items-center justify-center text-black">
                            Start
                            <div class="relative rounded-full border border-black p-2 mx-2 my-2">Learning</div>
                        </h1>

                        <h1 class="flex text-3xl lg:text-7xl items-center justify-center text-black">
                            Language For
                            <div class="relative rounded-full border bg-amber-500 border-black p-2 mx-2 my-2">Free</div>
                        </h1>

                    </div>


                    <div class="flex justify-center mt-10 lg:justify-start">

                        <button
                            class="magnetic-btn rounded-full relative px-4 py-3.5 bg-kemi-ojo lg:w-[200px] text-center shadow-md transition-all hover:shadow-black/30 ">
                            <div
                                class="rounded-full border w-full border-kemi-ojo -z-10 absolute px-4 py-6 top-1.5 left-0.5 lg:w-[200px] text-center ">
                            </div>
                            Learn more

                        </button>
                    </div>


                </div>
            </div>
        </section>







        <div class="max-w-[85rem] mx-auto py-10 space-y-8">
            <section class="py-10 relative">
                <div class="w-full  flex justify-between mx-auto">
                    <div class="w-full justify-between flex flex-col lg:flex-row  gap-8 ">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex px-10">
                                <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                                    class="kemi-ojo-text-color font-semibold uppercase text-2xl md:text-3xl font-manrope leading-normal lg:text-start text-center">
                                    Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn ní Ilé Ẹ̀kọ́ Yorùbá:
                                </h2>
                                <p class="text-gray-800 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Àṣà Yorùbá dùn, ó kún fún ọ̀pọ̀lọpọ̀ ọgbọ́n, ó si ṣeé fi yangàn. Ó wù Olúwákẹ́mi ati
                                    àwọn ẹgbẹ́ rẹ̀ kí àwọn ọmọdé òde òní ní òye èdè Yorùbá kikà, kíkọ, àti sísọ yékéyéké ní
                                    ó mú kí wón gbé “Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn” jade. Ninu eto yi ni kilaasi kíkọ , kikà
                                    ati sísọ ede Yorùbá wà ni www.protokospublishersonline.com tÍ ẹníkẹ́ni le darapọ̀ mọ́.
                                    Olúwákẹ́mi sì ti kọ àwọn ìwe Yorùbá miràn ti o le ran olùkọ́, òbí ati àwọn akẹ́kọ̀ọ́
                                    lọ́wọ́. Ẹ tún leèri àwọn ìwé wọ̀nyíí ni favouronline.kemiolaojo.com
                                </p>


                                <button
                                    class="sm:w-fit px-10 bg-kemi-ojo w-full py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                                </button>
                            </div>

                        </div>
                        <img class="w-full lg:w-auto lg:mx-0 mx-auto h-full object-cover"
                            src="{{ asset('/images/kemi-3.jpeg') }}" alt="about Us image" />
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection

{{-- @section('app-script')
    <script src="{{ asset('./scripts/ScrollTrigger.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // GSAP animation for bouncing button
            gsap.fromTo("#scroll-btn", {
                y: -10
            }, {
                y: 10,
                repeat: -1,
                yoyo: true,
                duration: 0.8,
                ease: "power1.inOut"
            });

            // Scroll to next section on button click
            document.getElementById("scroll-btn").addEventListener("click", () => {
                gsap.to(window, {
                    scrollTo: "#next-section",
                    duration: 1.5,
                    ease: "power2.inOut"
                });
            });
        });
    </script>
@endsection --}}
