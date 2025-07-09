<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing</title>

    
    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeUp {
            animation: fadeUp 0.6s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-slate-700 antialiased">

    <x-navbar></x-navbar>
    <div class="pt-32 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-12">
        
        <main class="py-8">
            <section class="mb-8">
                <div class="flex justify-center items-center gap-4">
                    <button class="flex items-center gap-2 px-4 py-2.5 bg-slate-900 text-white border border-slate-900 rounded-lg text-sm font-medium shadow-sm transition-all hover:-translate-y-0.5">
                        <span>Location</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.274 1.765 11.842 11.842 0 0 0 .757.433.62.62 0 0 0 .28.14l.018.008.006.003Z" clip-rule="evenodd" /><path d="M10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" /></svg>
                    </button>
                    <button class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-slate-700 shadow-sm transition-all hover:-translate-y-0.5 hover:border-gray-400">
                        <span>Type</span>
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" /></svg>
                    </button>
                    <button class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-slate-700 shadow-sm transition-all hover:-translate-y-0.5 hover:border-gray-400">
                        <span>Price Range</span>
                         <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 10.818v2.4-2.4Zm-1.5 0v2.4-2.4Zm1.5 0V8.418-8.418Zm-1.5 0V8.418-8.418Z" /><path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 15.5 2h-11ZM10 8.418a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($properties as $property)
                <a href="{{ url('detail/' . $property->id) }}" class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp block"> <!-- Tambahkan class 'block' di sini -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm {{ $property->status == 'FOR RENT' ? 'bg-emerald-600/90' : 'bg-slate-900/70' }}">{{ $property->status }}</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">{{ $property->judul }}</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">{{ strtoupper($property->location) }}</p>
                        <p class="text-lg font-bold text-slate-900">
                            Rp{{ number_format($property->harga, 0, ',', '.') }}
                            @if($property->status == 'FOR RENT') <span class="text-amber-600 font-medium">/month</span> @endif
                        </p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600 text-sm">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3.75 3.75h4.5m-4.5 0L9 9m0 6l-5.25 5.25m0 0h4.5m-4.5 0L9 15m6-6l5.25-5.25m0 0h-4.5m4.5 0L15 9m0 6l5.25 5.25m0 0h-4.5m4.5 0L15 15"/></svg>
                                <span>{{ $property->luas_bangunan }} m²</span>
                            </div>
                        </div>
                    </div>
                </a> <!-- Tutup tag a di sini -->
            @empty
                <p class="text-center col-span-3 text-gray-500">Tidak ada properti tersedia.</p>
            @endforelse
        </div>

            <!-- Pagination -->
            <div class="mt-10 flex justify-center">
                {{ $properties->links() }}
            </div>

        </main>
    </div>


    <script src="script.js"></script>
</body>
</html>