<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $property->judul }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .slide {
            display: none;
        }
        .slide.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">

<main class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

        {{-- Galeri Slider --}}
        <div class="relative rounded-2xl overflow-hidden shadow-lg">
            @foreach($property->photos as $index => $photo)
                <img src="{{ asset('storage/uploads/' . $photo->foto_generate_name) }}"
                     class="slide {{ $index === 0 ? 'active' : '' }} w-full h-[400px] object-cover rounded-2xl transition duration-300"
                     alt="Foto Properti {{ $index + 1 }}">
            @endforeach

            {{-- Tombol navigasi --}}
            <button onclick="changeSlide(-1)"
                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/70 backdrop-blur-sm text-gray-800 rounded-full p-2 hover:bg-white shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button onclick="changeSlide(1)"
                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/70 backdrop-blur-sm text-gray-800 rounded-full p-2 hover:bg-white shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        {{-- Detail Properti --}}
        <div class="flex flex-col justify-center space-y-4">
            <h1 class="text-4xl font-bold text-slate-900">{{ $property->judul }}</h1>
            <p class="text-sm text-gray-500">📍 {{ $property->lokasi }}</p>

            <div class="text-base text-gray-700 space-y-1">
                <p><span class="font-medium">Tipe Bangunan:</span> {{ $property->tipe_bangunan }}</p>
                <p><span class="font-medium">Luas Bangunan:</span> {{ $property->luas_bangunan }} m²</p>
                <p><span class="font-medium">Luas Tanah:</span> {{ $property->luas_tanah }} m²</p>
            </div>

            <p class="text-3xl font-bold text-slate-900 mt-4">
                Rp {{ number_format($property->harga, 0, ',', '.') }}
            </p>

            <button class="w-full sm:w-fit bg-black text-white font-semibold rounded-full py-3 px-10 hover:bg-gray-800 transition">
                House Survey
            </button>
        </div>
    </div>

    {{-- Deskripsi --}}
    <div class="mt-16 border-t border-gray-200 pt-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Deskripsi</h2>
        <p class="text-gray-700 leading-relaxed text-justify">
            {{ $property->deskripsi }}
        </p>
    </div>
</main>

{{-- Slider Script --}}
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function changeSlide(direction) {
        currentSlide += direction;
        if (currentSlide < 0) currentSlide = slides.length - 1;
        if (currentSlide >= slides.length) currentSlide = 0;
        showSlide(currentSlide);
    }
</script>

</body>
</html>
