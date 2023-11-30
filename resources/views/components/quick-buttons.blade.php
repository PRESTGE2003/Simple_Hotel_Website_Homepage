@php
        $cities = ["Abia","Adamawa","Akwa Ibom","Anambra","Bauchi","Bayelsa","Benue","Borno","Cross River","Delta","Ebonyi","Edo","Ekiti","Enugu","Gombe","Imo","Jigawa","Kaduna","Kano","Katsina","Kebbi","Kogi","Kwara","Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau","Rivers","Sokoto","Taraba","Yobe","Zamfara",
        ]
@endphp 

<section class="flex items-center justify-center gap-10">

        {{-- Select a city --}}
        <div class="w-[150px] h-fit px-2 py-3 rounded-lg font-normal font-[Ubuntu] text-[rgba(0, 0, 0, 0.50)] bg-white relative">
                <div class="flex items-center justify-between gap-2 font-light text-[rgba(0, 0, 0, 0.50)] cursor-pointer parent">
                        <span value="default" id="holder">select a city</span> 
                        <img src="{{ asset('images/caret.png') }}" alt="" class="w-[20px] h-[20px] transition-all duration-300 ease-ease-out">
                </div>

                <div id="cities" class="hidden z-20 w-[300px] h-[50vh] bg-transparent absolute top-full -left-5 p-3">
                        <ul class="w-full h-full rounded-xl overflow-y-scroll p-4 bg-white shadow-lg scroll">
                                @foreach ($cities as $city)
                                <li value="{{ $city }}" class="options cursor-pointer">{{ $city }}</li>                        
                                @endforeach 
                        </ul>
                </div>
        </div>

        {{-- Check in --}}
        <div class="w-[150px] h-fit px-2 py-3 rounded-lg overflow-hidden font-normal font-[Ubuntu] text-[rgba(0, 0, 0, 0.50)] bg-white relative flex items-center justify-between date">
                <span class=" rounded-lg w-full h-full capitalize">check in</span>
                <img src="{{ asset('images/calendar.png') }}" alt="" class="w-[16px] h-[16px]">
                <input type="date" name="" id="" class="w-full h-full absolute top-0 left-0 opacity-0 px-2 cursor-pointer">
        </div>

        {{-- Check out --}}
        <div class="w-[150px] h-fit px-2 py-3 rounded-lg overflow-hidden font-normal font-[Ubuntu] text-[rgba(0, 0, 0, 0.50)] bg-white relative flex items-center justify-between date">
                <span class=" rounded-lg w-full h-full capitalize">check out</span>
                <img src="{{ asset('images/calendar.png') }}" alt="" class="w-[16px] h-[16px]">
                <input type="date" name="" id="" class="w-full h-full absolute top-0 left-0 opacity-0 px-2 cursor-pointer">
        </div>

        <button type="button" class="capitalize px-2 py-3 rounded-lg bg-[#DFAA5B] hover:bg-yellow-600 text-white font-normal font-[Ubuntu]">
                check availability
        </button>

</section>