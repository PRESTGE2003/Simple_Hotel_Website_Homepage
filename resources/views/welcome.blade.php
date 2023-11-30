<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font Awosome  --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.3.0-web/css/all.min.css') }}">
    {{-- Font famly --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- Taileind and css --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    {{-- Title --}}
    <title>Document</title>
</head>
<body class="bg-gradient-to-bl from-white from-70% to-slate-400 to-100%">
    
    {{-- Logo and Navbar --}}
    <header class="py-6">
        {{-- Logo --}}
        <div class="w-[150px] h-[100px] mx-auto">
            <img src="{{ asset('images/download 1.png') }}" alt="" class="w-full h-full">
        </div>

        {{-- Navigation --}}
        <nav>
            <x-navigation />
        </nav>
    </header>

    {{-- quick buttons --}}
    <section class="bg-black py-5">
            <x-quick-buttons />
    </section>

    {{-- Hero --}}
    <section class="w-full h-[100vh] relative grid place-content-center canva">
        <di class="w-fit h-fit mt-52">
            <h1 class="font-bold text-white text-[5rem] leading-tight">WELCOME TO BON HOTEL</h1>
            <p class="font-[500] font-[Ubuntu] text-white text-[1.5rem] w-full text-center leading-tight">Good people. Good thinking. Good feeling.</p>
            <div class="w-fit h-fit mx-auto py-10">
                <button class="py-5 px-32 bg-[#DFAA5B] text-white rounded-lg text-xl font-[500] font-[Ubuntu]">EXPLORE</button>
            </div>
        </div>

        <div class="absolute top-[85%] left-52 py-5 w-[70%] bg-white rounded-t-lg">
            <h3 class="w-full text-center font-[Ubuntu] font-bold text-[1.5rem] text-[#957554] py-4">Facilities</h3>
            <div class="py-4 flex items-center justify-evenly">
                <i class="fa-solid fa-kitchen-set text-[32px] text-[#DFAA5B] hover:text-darkgold"></i>
                <i class="fa-solid fa-person-swimming text-[32px] text-[#DFAA5B] hover:text-darkgold"></i>
                <i class="fa-solid fa-wifi text-[32px] text-[#DFAA5B] hover:text-darkgold"></i>
                <i class="fa-solid fa-dumbbell text-[32px] text-[#DFAA5B] hover:text-darkgold"></i>
                <i class="fa-solid fa-taxi text-[32px] text-[#DFAA5B] hover:text-darkgold"></i>
            </div>
            <h3 class="w-full text-center font-[Ubuntu] font-bold text-[2rem] text-[#957554] pt-16 pb-4">Rooms & Rates</h3>
        </div>
    </section>

    {{-- Room Showcase --}}
    <section class="w-[80%] p-4 flex flex-wrap gap-5 items-center justify-center mt-40 mx-auto">
        <x-room-box :path="'images/room1.png'">
            Standard Twin Room
        </x-room-box>
        
        <x-room-box :path="'images/room2.png'">
            Standard Room
        </x-room-box>
        
        <x-room-box :path="'images/room3.png'">
            Standard View Room
        </x-room-box>
        
        <x-room-box :path="'images/room4.png'">
            Deluxe Room
        </x-room-box>
    </section>

    {{-- Call to action Button  --}}
    <section class="py-20">
        <h1 class="text-[2.5rem] text-[#957554] font-bold font-[Ubuntu] w-full text-center">Get a room already!</h1>
        <div class="w-fit h-fit mx-auto">
            <button class="px-16 py-5 rounded-lg font-[500] font-[Ubuntu] text-lg bg-[#DFAA5B] text-white">Book Now</button>
        </div>
    </section>

    <footer class="flex p-4 w-full h-fit items-start justify-around bg-black">

        <div class="w-fit h-fit flex flex-col justify-between">
            <img src="{{ asset('images/logo2.png') }}" alt="" class="w-[60px] h-[60px]">
            <div class="font-[Ubuntu] text-white">
                <h4 class="font-semibold text-sm">Bon Hotels Head Office</h4>
                <p class="text-sm font-light">+27 434 344 432</p>
                <p class="text-sm font-light">info@bonhotels.com</p>
            </div>
        </div>

        <div class="font-[Ubuntu] text-white w-fit h-fit">
            <p class="text-base font-light">Our Hotels</p>
            <p class="text-base font-light">Our Conferencing</p>
            <p class="text-base font-light">Our Company</p>
            <p class="text-base font-light">Hotel Design</p>
            <p class="text-base font-light">Careers</p>
        </div>

        <div class="text-[Ubuntu] text-white w-fit h-fit">
            <h4 class="font-semibold text-xl">Subcribe for Offers</h4>
            <input type="email" class="w-[350px] h-[55px] px-10 bg-white rounded-lg text-lg" placeholder="enter vaild email">
            <button  class="w-[350px] h-[55px] bg-[#DFAA5B] block mt-3 rounded-lg font-bold text-lg">Subcribe  Now</button>
        </div>

    </footer>

</body>
</html>