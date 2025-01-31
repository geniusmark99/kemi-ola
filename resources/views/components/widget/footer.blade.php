<footer class="py-10 bg-kemi-ojo ">
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
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
                    <h4 class="font-semibold text-gray-800 dark:text-neutral-200">Follow on Socials</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><button type="button"
                                class="text-white hover:text-white focus:outline-none focus:text-gray-900 
                                ">Facebook
                            </button></p>
                        <p><button type="button"
                                class="text-white hover:text-white focus:outline-none focus:text-gray-900 
                                ">Twitter
                            </button></p>

                        <p><button type="button"
                                class="text-white hover:text-white focus:outline-none focus:text-gray-900 
                                    ">LinkedIn
                            </button></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-gray-800 dark:text-neutral-200">Useful Links</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><a class="text-white hover:text-white focus:outline-none" href="{{ route('medical') }}">
                                Medical Ultrasound</a></p>
                        <p><a class="text-white hover:text-white focus:outline-none" href="{{ route('favour') }}">
                                Favour Store</a></p>
                        <p><a class="text-white hover:text-white focus:outline-none" href="{{ route('protokos') }}">
                                Protokos Publishers</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-gray-800 dark:text-neutral-200">Opening Hours</h4>

                    <div class="mt-3 grid space-y-1.5 text-sm">
                        <p>
                        <div class="text-white hover:text-white flex items-center flex-row justify-between">
                            <span>Mon - Tues</span>
                            <span>08:00AM - 05:00PM</span>
                        </div>
                        </p>

                        <p>
                        <div class="text-white hover:text-white flex items-center flex-row justify-between">
                            <span>Mon - Tues</span>
                            <span>08:00AM - 05:00PM</span>
                        </div>
                        </p>

                        <p>
                        <div class="text-white hover:text-white flex items-center flex-row justify-between">
                            <span>Mon - Tues</span>
                            <span>08:00AM - 05:00PM</span>
                        </div>
                        </p>

                        <p>
                        <div class="text-white hover:text-white flex items-center flex-row justify-between">
                            <span>Mon - Tues</span>
                            <span>08:00AM - 05:00PM</span>
                        </div>
                        </p>

                        <p>
                        <div class="text-white hover:text-white flex items-center flex-row justify-between">
                            <span>Mon - Tues</span>
                            <span>08:00AM - 05:00PM</span>
                        </div>
                        </p>

                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <p class="text-xs sm:text-sm text-white">
                © {{ date('Y') }} Kemi Olaojo.
            </p>
        </div>

        <div class="bg-[radial-gradient(closest-side,theme(colors.violet.600),theme(colors.blue.600),transparent)] h-1">
        </div>
    </div>
</footer>
