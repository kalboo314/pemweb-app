<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Jual Beli Rumah</title>
    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeUp {
            animation: fadeUp 0.6s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-800">

    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <div class="h-screen bg-[url('https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80')] bg-no-repeat bg-center bg-cover flex flex-col justify-center items-center px-4 text-center relative">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>

        <!-- Content -->
        <div class="relative z-20">
            <p class="text-white mb-4 tracking-widest uppercase text-sm">Let us guide your home</p>
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-2">RUMAHIN</h1>
            <p class="text-white text-lg md:text-xl mb-6">Temukan rumah impian anda</p>

            <!-- Search Bar -->
            <div class="flex items-center bg-white rounded-full px-4 py-2 shadow-md w-full max-w-xl mx-auto">
                <input
                    type="text"
                    placeholder="Enter Name, Keywords..."
                    class="flex-grow outline-none px-4 py-2 text-gray-700">
                <button
                    class="text-white bg-yellow-400 hover:bg-yellow-500 rounded-full p-3 transition duration-300 shadow hover:shadow-lg focus:outline-none">
                    <!-- SVG Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"></path>
                    </svg>
                </button>
            </div>


            <!-- Category Icons -->
            <div class="flex gap-4 mt-8 flex-wrap justify-center">
                <!-- Card Item -->
                <div class="flex items-center gap-3 px-5 py-2 rounded-full backdrop-blur-sm bg-white/30 shadow-lg text-white cursor-pointer hover:bg-white/40 transition">
                    <div class="bg-white p-2 rounded-full shadow-md">
                        <img src="{{ asset('images/logos/modern_villa.png') }}" alt="Modern Villa" class="w-18 h-18" />
                    </div>
                    <span class="font-medium">Modern Villa</span>
                </div>

                <!-- Card Item -->
                <div class="flex items-center gap-3 px-5 py-2 rounded-full backdrop-blur-sm bg-white/30 shadow-lg text-white cursor-pointer hover:bg-white/40 transition">
                    <div class="bg-white p-2 rounded-full shadow-md">
                        <img src="{{ asset('images/logos/apartment.png') }}" alt="Apartment" class="w-18 h-18" />
                    </div>
                    <span class="font-medium">Apartment</span>
                </div>

                <!-- Card Item -->
                <div class="flex items-center gap-3 px-5 py-2 rounded-full backdrop-blur-sm bg-white/30 shadow-lg text-white cursor-pointer hover:bg-white/40 transition">
                    <div class="bg-white p-2 rounded-full shadow-md">
                        <img src="{{ asset('images/logos/town_house.png') }}" alt="Town House" class="w-18 h-18" />
                    </div>
                    <span class="font-medium">Town House</span>
                </div>
            </div>



        </div>
    </div>

    <!-- Why You Should Work With Us Section -->
    <section class="py-20 bg-white text-center px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 pb-20">Why You Should Work With Us</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
            <!-- Card 1 -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/logos/icon_4.png') }}" alt="" class="" />
                <h3 class="text-xl font-semibold mb-2">Wide Range of Properties</h3>
                <p class="text-gray-600 text-sm max-w-xs">
                    Kami menyediakan panduan ahli untuk membantu Anda memilih properti dari berbagai pilihan yang tersedia.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/logos/icon_5.png') }}" alt="" class="" />
                <h3 class="text-xl font-semibold mb-2">Buy Homes</h3>
                <p class="text-gray-600 text-sm max-w-xs">
                    Kami akan membantu Anda menemukan harga pasar terbaik dan membeli dengan cepat.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/logos/icon_6.png') }}" alt="" class="" />
                <h3 class="text-xl font-semibold mb-2">Trusted by Thousands</h3>
                <p class="text-gray-600 text-sm max-w-xs">
                    Kami menyediakan konsultasi gratis untuk membantu Anda mendapatkan pinjaman untuk rumah baru Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="py-20 bg-gray-50 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Featured Properties</h2>
        </div>

        <!-- Filter Buttons -->

        @php
        $properties = [
        ['name'=> 'Luxury Family Home', 'location' => 'JAKARTA PUSAT', 'price' => 'RP6.500.000.000', 'status' => ['sale', 'featured'], 'bed' => 4, 'bath' => 2, 'area' => 400],
        ['name' => 'Skyper Pool Apartment', 'location' => 'BEKASI', 'price' => 'RP5.000.000.000', 'status' => ['sale'], 'bed' => 3, 'bath' => 2, 'area' => 380],
        ['name' => 'North Dillard Street', 'location' => 'JAKARTA UTARA', 'price' => 'RP4.000.000/month', 'status' => ['rent'], 'bed' => 2, 'bath' => 1, 'area' => 300],
        ['name' => 'Penthouse', 'location' => 'BANDUNG', 'price' => 'RP4.000.000.000', 'status' => ['sale'], 'bed' => 5, 'bath' => 3, 'area' => 450],
        ['name' => 'New Apartment Nice View', 'location' => 'JAKARTA SELATAN', 'price' => 'RP10.000.000/month', 'status' => ['rent', 'featured'], 'bed' => 2, 'bath' => 1, 'area' => 250],
        ['name' => 'Diamond Manor Apartment', 'location' => 'JAKARTA UTARA', 'price' => 'RP7.000.000.000', 'status' => ['sale', 'featured'], 'bed' => 4, 'bath' => 2, 'area' => 500],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach ($properties as $item)
            <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80" alt="{{ $item['name'] }}" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                    <div class="absolute top-4 left-4 flex gap-2">
                        @foreach($item['status'] as $tag)
                        <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">{{ strtoupper($tag) }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-slate-900 mb-1">{{ $item['name'] }}</h3>
                    <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">{{ $item['location'] }}</p>
                    <p class="text-lg font-bold text-slate-900">{{ $item['price'] }}</p>
                    <hr class="my-4 border-gray-200">
                    <div class="flex items-center justify-start gap-6 text-slate-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                            <span class="font-medium">{{ $item['bed'] }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" />
                            </svg>
                            <span class="font-medium">{{ $item['bath'] }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" />
                            </svg>
                            <span class="font-medium">{{ $item['area'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- See All Button -->
        <div class="text-center mt-12">
            <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-6 py-3 rounded-full font-medium shadow">
                See All Listing →
            </button>
        </div>
    </section>




    <section class="bg-gray-50 py-20 px-4 md:px-10 text-center">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Find Properties in These Cities</h2>
        <p class="text-gray-500 text-sm md:text-base mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="relative">
            <div class="swiper citiesSwiper">
                <div class="swiper-wrapper">
                    @php
                    $cities = [
                        ["name" => "JAKARTA", "properties" => 3, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "BANDUNG", "properties" => 2, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "BEKASI", "properties" => 2, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "DENPASAR", "properties" => 3, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "YOGYAKARTA", "properties" => 2, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "BOGOR", "properties" => 1, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                        ["name" => "TANGERANG", "properties" => 2, "image" => "https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1740&q=80"],
                    ];
                    @endphp

                    @foreach ($cities as $city)
                    <div class="swiper-slide px-3">
                        <div class="rounded-lg overflow-hidden relative group transition-all duration-300">
                            <img src="{{ $city['image'] }}" alt="{{ $city['name'] }}" class="h-60 w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/40 to-transparent flex flex-col justify-end p-4 text-left text-white">
                                <h3 class="font-bold text-base">{{ $city['name'] }}</h3>
                                <p class="text-sm opacity-90">{{ $city['properties'] }} Properties</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination !bottom-0 mt-6 !relative"></div>

                <!-- Navigation Buttons -->
                <div class="absolute inset-y-1/2 -translate-y-1/2 w-full flex justify-between px-2 md:px-4 z-10">
                    <button class="swiper-button-prev-custom bg-black/50 hover:bg-black/70 text-white p-3 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="swiper-button-next-custom bg-black/50 hover:bg-black/70 text-white p-3 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white px-4 md:px-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-10">
            <!-- Satu Gambar Grid -->
            <div class="relative w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/logos/howitworks.png') }}" alt="Property Grid" class="">

            </div>
            <!-- Text -->
            <div class="w-full md:w-1/2 pl-45">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    How It works? <br />
                    <span class="text-gray-600">Find a perfect home</span>
                </h2>
                <p class="text-gray-500 mb-8 text-sm md:text-base">
                    Penjelasan singkat atau elemen penting bagaimana fasilitas kami bekerja.
                </p>

                <ul class="space-y-6">
                    <li class="flex gap-4">
                        <img
                            src="https://img.icons8.com/ios-filled/50/000000/home.png"
                            alt="Real Estate"
                            class="w-8 h-8" />
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700">Find Real Estate</h3>
                            <p class="text-sm text-gray-500">Cari rumah atau properti impianmu dengan mudah dan cepat.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <img
                            src="https://img.icons8.com/ios-filled/50/000000/administrator-male.png"
                            alt="Realtor"
                            class="w-8 h-8" />
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700">Survey</h3>
                            <p class="text-sm text-gray-500">Membuat jadwal dan melakukan survey rumah impian anda.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <img
                            src="https://img.icons8.com/ios-filled/50/000000/key.png"
                            alt="Take the Keys"
                            class="w-8 h-8" />
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700">Take The Keys</h3>
                            <p class="text-sm text-gray-500">Proses serah terima kunci cepat dan tanpa ribet.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</body>

</html>
@extends('layout')

@section('title', 'Homepage')

@section('content')
{{-- Featured Properties --}}
<!-- Featured Properties Section -->
{{-- ... --}}

{{-- Cities --}}
<!-- Cities Section with Swiper -->
{{-- (kode Swiper tadi taruh di sini) --}}
@endsection

@push('scripts')
<script>
    const swiper = new Swiper('.citiesSwiper', {
        slidesPerView: 1.2,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
        loop: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
    });
</script>
@endpush