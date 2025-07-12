<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $property->judul }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
  .slide-img {
    transition: transform 0.5s ease, opacity 0.5s ease;
  }
</style>



<body class="bg-gray-50">

    <x-navbar></x-navbar>

    @if(session('survey_success'))
    <script>
        alert(@json(session('survey_success')));
    </script>
    @endif


    <main class="pt-32 container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

            <div class="relative w-full h-[400px]">
                <div id="carousel" class="relative w-full h-full flex items-center justify-center overflow-visible">
                    @foreach($property->photos as $index => $photo)
                    <img 
                        src="{{ asset('storage/uploads/' . $photo->generated_name) }}"
                        data-index="{{ $index }}"
                        class="absolute top-0 left-1/2 transform -translate-x-1/2 transition-all duration-500 ease-in-out slide-img 
                            {{ $index === 0 ? 'z-30 scale-100' : 'z-10 scale-90 opacity-50' }}"
                        style="width: 80%; height: 100%; border-radius: 1rem; object-fit: cover;"
                        alt="Foto Properti {{ $index + 1 }}">
                    @endforeach

                    @if($property->photos->count() > 1)
                        <button onclick="changeStackedSlide(-1)"
                            class="nav-btn absolute left-2 top-1/2 transform -translate-y-1/2 z-40 bg-white/70 backdrop-blur-sm text-gray-800 rounded-full p-2 transition hover:bg-black hover:text-white active:scale-95 shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>

                        <button onclick="changeStackedSlide(1)"
                            class="nav-btn absolute right-2 top-1/2 transform -translate-y-1/2 z-40 bg-white/70 backdrop-blur-sm text-gray-800 rounded-full p-2 transition hover:bg-black hover:text-white active:scale-95 shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    @endif

                </div>
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

                <a href="{{ route('survey.create', $property->id) }}">
                    <button class="w-full sm:w-fit bg-black text-white font-semibold rounded-full py-3 px-10 hover:bg-gray-800 transition">
                        House Survey
                    </button>
                </a>


            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="mt-16 border-t border-gray-200 pt-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-4">Deskripsi</h2>
            <p class="text-gray-700 leading-relaxed text-justify">
                {{ $property->deskripsi }}
            </p>
        </div>
        
    
        {{-- Contact Person --}}
        <div class="mt-16 border-t border-gray-200 pt-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-4">Hubungi Penjual</h2>
            <a href="{{ route('seller.profile', $property->user->id) }}"
            class="inline-block px-6 py-3 border border-black rounded-full hover:bg-gray-100 text-black font-medium transition">
                👤 {{ $property->user->name }}
            </a>
        </div>



    </main>

    {{-- Slider Script --}}
    <script>
        let currentStacked = 0;
        const slidesStacked = document.querySelectorAll('.slide-img');

        function updateStackedSlides() {
        slidesStacked.forEach((slide, index) => {
            if (index === currentStacked) {
            slide.classList.add('z-30', 'scale-100', 'opacity-100');
            slide.classList.remove('z-10', 'scale-90', 'opacity-50');
            } else {
            slide.classList.remove('z-30', 'scale-100', 'opacity-100');
            slide.classList.add('z-10', 'scale-90', 'opacity-50');
            }
        });
        }

        function changeStackedSlide(dir) {
        currentStacked += dir;
        if (currentStacked < 0) currentStacked = slidesStacked.length - 1;
        if (currentStacked >= slidesStacked.length) currentStacked = 0;
        updateStackedSlides();
        }

        updateStackedSlides();
    </script>

</body>
</html>
