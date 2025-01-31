@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class="max-w-xl lg:max-w-7xl mx-5 lg:mx-auto mt-[100px] lg:mt-[150px]">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="relative my-10 h-[30vh] bg-cover bg-center flex justify-center items-center rounded-lg px-4"
            style="background-image: url('./images/background-kemi-platforms-5-min.jpeg');">

            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-70 rounded-lg"></div>


            <div class="flex flex-col items-center">

                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-gray-200 text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá</h2>
                <p class="mt-1 text-white text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn ní Ilé Ẹ̀kọ́ Yorùbá:
                </p>
            </div>

        </div>




        <div class="max-w-[85rem] mx-auto py-10 space-y-8">



            <section class="py-10 relative" data-aos="fade-up" data-aos-duration="1200">
                {{-- md:px-5 lg:px-5 px-4 --}}
                <div class="w-full  flex justify-between mx-auto">
                    <div class="w-full justify-between flex flex-col lg:flex-row  gap-8 ">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                                <h2
                                    class="text-kemi-ojo font-semibold uppercase text-2xl md:text-3xl font-manrope leading-normal lg:text-start text-center">
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
                            </div>
                            <button
                                class="sm:w-fit bg-kemi-ojo w-full px-3.5 py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                            </button>
                        </div>
                        <img class="w-full lg:w-auto lg:mx-0 mx-auto h-full rounded-3xl object-cover"
                            src="{{ asset('/images/kemi-3.jpeg') }}" alt="about Us image" />
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
