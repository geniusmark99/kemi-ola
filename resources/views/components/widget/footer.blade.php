<footer class="flex flex-col border-t-[0.5px] border-white">

    <div class="container mx-auto p-4 bg-white">
        <h1 class="text-2xl lg:text-5xl font-bold text-center mb-4 py-10 kemi-ojo-text-color"
            style="font-family: 'neueMachina-ultrabold', sans-serif; ">Our Location</h1>
        <div id="map-container" class="border-2 border-kemi-ojo w-full h-64 md:h-96 rounded-lg shadow-lg overflow-hidden">
            <!-- Google Map will be injected here -->
        </div>
    </div>
    {{-- max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 --}}
    <div class="w-full mx-auto px-4 py-10  bg-gradient-to-r from-kemi-ojo to-kemi-ojo-purple">
        <div class="pb-10">
            <!-- Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
                <div class="col-span-full lg:col-span-1">
                    <a class="flex-none inline-block focus:outline-none focus:opacity-80" href="/">
                        <img class="w-28 h-auto" src="{{ asset('/images/Kemi-logo.png') }}" alt="KemiOjo Logo">
                    </a>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-neutral-200 tracking-wider">Follow on Socials</h4>

                    <div class="mt-3 grid space-y-3 gap-y-3 text-sm">
                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-white  focus:outline-none focus:text-gray-900 
                                ">Facebook
                            </a></p>
                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-white  focus:outline-none focus:text-gray-900 
                                ">Twitter
                            </a></p>

                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-white  focus:outline-none focus:text-gray-900 
                                    ">LinkedIn
                            </a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-neutral-200 tracking-wider">Useful Links</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><a class=" text-white hover:text-white focus:outline-none" href="{{ route('protokos') }}">
                                Protokos Publishers</a></p>
                        <p><a class=" text-white hover:text-white focus:outline-none" href="{{ route('medical') }}">
                                Medical Ultrasound</a></p>
                        <p><a class=" text-white hover:text-white focus:outline-none" href="{{ route('favour') }}">
                                Favour Online</a></p>
                        <p><a class="text-white hover:text-white focus:outline-none" href="{{ route('favour') }}">
                            </a></p>

                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-neutral-200 tracking-wider">Office address</h4>



                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><span class=" text-white hover:text-white focus:outline-none">
                                20-22 Wenlock Road London

                            </span></p>
                    </div>


                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->


            <div>


                <p class="text-xs sm:text-sm text-white">
                    © {{ date('Y') }} Kemi Olaojo.
                </p>


            </div>

        </div>

        <div class="bg-[radial-gradient(closest-side,theme(colors.violet.600),theme(colors.blue.600),transparent)] h-1">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mapContainer = document.getElementById("map-container");

            const iframe = document.createElement("iframe");
            iframe.src =
                "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19854.30144428207!2d-0.09347623243942533!3d51.53063520163083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c947f1d38d7%3A0x5ccacfb6659a173f!2s20-22%20Wenlock%20Rd%2C%20London%20N1%207GU%2C%20UK!5e0!3m2!1sen!2sus!4v1707598890013";
            iframe.width = "100%";
            iframe.height = "100%";
            iframe.allowFullscreen = true;
            iframe.loading = "lazy";
            iframe.referrerPolicy = "no-referrer-when-downgrade";
            iframe.classList.add("w-full", "h-full");

            mapContainer.appendChild(iframe);
        });
    </script>
</footer>
