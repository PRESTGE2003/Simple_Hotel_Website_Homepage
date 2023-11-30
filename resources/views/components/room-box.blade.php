<div style="background: url({{ $path }})" class="w-[48%] h-[400px] rounded-lg grid place-content-center room relative cursor-pointer overflow-hidden hover:before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-[#00000099] group before:transition-all duration-300 ease-in-out">
        <div class="mt-40 w-fit group-hover:z-30">
                <h1 class="capitalize text-white text-2xl font-[Ubuntu] font-[500] text-center">{{ $slot }} </h1>
                <div class="w-fit h-fit mx-auto">
                        <button class="mx-auto w-fit bg-[#DFAA5B] px-10 py-4 rounded-lg font-[500] font-[Ubuntu] text-white hover:bg-darkgold">Check Rates</button>
                </div>
        </div>
</div>