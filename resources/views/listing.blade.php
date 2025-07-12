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
<body class="bg-white text-slate-700 antialiased flex flex-col min-h-screen">

    <x-navbar></x-navbar>
    <div class="pt-20 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-12 flex-grow">
        
        <main class="py-8">
            <!-- Tambahkan form filter di bagian atas section -->
            <form method="GET" action="{{ url('/listing') }}" class="mb-8">
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Lokasi -->
                <select name="lokasi" class="border px-4 py-2 rounded-lg">
                <option value="">Semua Lokasi</option>
                @foreach(['Jakarta','Bandung','Bekasi','Denpasar','Yogyakarta','Surabaya','Bogor','Tangerang','Padang','Samarinda'] as $lokasi)
                    <option value="{{ $lokasi }}" {{ request('lokasi') == $lokasi ? 'selected' : '' }}>{{ $lokasi }}</option>
                @endforeach
                </select>

                <!-- Tipe Bangunan -->
                <select name="tipe_bangunan" class="border px-4 py-2 rounded-lg">
                <option value="">Semua Tipe</option>
                @foreach(['Pent House','Apartment','Town House'] as $tipe)
                    <option value="{{ $tipe }}" {{ request('tipe_bangunan') == $tipe ? 'selected' : '' }}>{{ $tipe }}</option>
                @endforeach
                </select>

                <!-- Range Harga -->
                <select name="harga" class="border px-4 py-2 rounded-lg">
                <option value="">Semua Harga</option>
                <option value="<500" {{ request('harga') == '<500' ? 'selected' : '' }}>< 500jt</option>
                <option value="500-1000" {{ request('harga') == '500-1000' ? 'selected' : '' }}>500jt - 1M</option>
                <option value=">1000" {{ request('harga') == '>1000' ? 'selected' : '' }}>> 1M</option>
                </select>

                <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Terapkan</button>
            </div>
            </form>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($properties as $property)
                    <a href="{{ url('detail/' . $property->id) }}" class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp block"> <!-- Tambahkan class 'block' di sini -->
                        <div class="relative overflow-hidden">
                            @php
                                $firstPhoto = $property->photos->first();
                            @endphp

                            @if($firstPhoto)
                                <img src="{{ asset('storage/uploads/' . $firstPhoto->generated_name) }}" alt="{{ $firstPhoto->original_name }}" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            @else
                                <div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                            @endif
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">{{ $property->judul }}</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">{{ strtoupper($property->lokasi) }}</p>
                            <p class="text-lg font-bold text-slate-900">
                                Rp{{ number_format($property->harga, 0, ',', '.') }}
                            </p>
                            <hr class="my-4 border-gray-200">

                            <div class="flex items-center justify-start gap-6 text-slate-600 text-sm">
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4.5 10.5V21h15V10.5" />
                                    </svg>
                                    <span>{{ $property->luas_bangunan }} m²</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path d="M3.75 3.75h4.5m-4.5 0L9 9m0 6l-5.25 5.25m0 0h4.5m-4.5 0L9 15m6-6l5.25-5.25m0 0h-4.5m4.5 0L15 9m0 6l5.25 5.25m0 0h-4.5m4.5 0L15 15"/>
                                    </svg>
                                    <span>{{ $property->luas_tanah }} m²</span>
                                </div>
                            </div>
                        </div>
                    </a>
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

    <x-footer></x-footer>

    <script src="script.js"></script>
</body>
</html>