<div id="container" class="w-4/5 h-4/5 mx-auto rounded-lg overflow-hidden relative group">
    <!-- VIDEO -->
    <figure>
        <video class="w-full" ontrolslist="nodownload" oncontextmenu="return false;">
            <source src="{{ $src }}" />
        </video>
    </figure>

    <!-- CONTROLS -->
    <div id="controls"
        class="opacity-0 p-5 absolute bottom-0 left-0 w-full transition-opacity duration-300 ease-linear group-hover:opacity-100">
        <!-- PROGRESS BAR -->

        <div id="progress-bar" class="h-1 w-full bg-white cursor-pointer mb-4">
            <div id="progress-indicator" class="h-full w-0 bg-indigo-800 transition-all duration-500 ease-in-out"></div>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between">
                <!-- REWIND BUTTON -->
                <button id="rewind" class="transition-all duration-100 ease-linear hover:scale-125">
                    <i class="material-icons text-white text-3xl w-12">replay_10 </i>
                </button>

                <!-- PLAY BUTTON -->
                <button id="play-pause" class="transition-all duration-100 ease-linear hover:scale-125">
                    <i class="material-icons text-white text-5xl inline-block w-12">play_arrow</i>
                </button>

                <!-- FAST FORWARD BUTTON -->
                <button id="fast-forward" class="transition-all duration-100 ease-linear hover:scale-125">
                    <i class="material-icons text-white text-3xl w-12">forward_10 </i>
                </button>
            </div>

            <div>
                <!-- VOLUME BUTTON -->
                <button id="volume" class="transition-all duration-100 ease-linear hover:scale-125">
                    <i class="material-icons text-white text-3xl">volume_up</i>
                </button>
            </div>
        </div>
    </div>
</div>
