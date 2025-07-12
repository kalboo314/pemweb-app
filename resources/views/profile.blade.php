<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-white text-center font-sans text-gray-800 ">
  <x-navbar></x-navbar>

  <section class="pt-20 py-10">
    
    {{-- Foto Profil --}}
    <div class="flex justify-center">
      <img class="w-60 h-60 rounded-full object-cover mb-4"
           src="{{ auth()->user()->profile_photo 
             ? asset('uploads/' . auth()->user()->profile_photo) 
             : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }}" 
           alt="Foto Profil">
    </div>

    {{-- Nama dan Bio --}}
    <h1 class="text-2xl font-semibold mt-2">{{ auth()->user()->name }}</h1>
    <p class="text-gray-500">
      {{ auth()->user()->bio ?? 'Belum mengisi bio.' }}
    </p>

    <div class="flex flex-col md:flex-row justify-center items-start gap-8 mt-10 px-6">
      

     <!-- Box Iklan -->
    <div class="border border-gray-200 rounded-xl p-6 w-full max-w-sm text-center relative h-[250px] flex flex-col justify-between">
        @php
            $properties = auth()->user()->properties;
        @endphp

        @if($properties->isEmpty())
            {{-- Gambar dan pesan jika belum ada iklan --}}
            <img src="https://cdn-icons-png.flaticon.com/512/8674/8674834.png" alt="Iklan Kosong" class="w-24 mx-auto mb-4">
            <p class="mb-4">Anda belum memasang iklan</p>
        @else
            {{-- Scrollable list properti --}}
            <div class="overflow-y-auto max-h-[270px] pr-1 mb-4 text-left">
                <p class="text-sm text-gray-500 mb-3 font-semibold">Daftar Iklan Anda:</p>
                <ul class="space-y-2">
                    @foreach ($properties as $property)
                        <li>
                            <a href="{{ route('detail', $property->id) }}" 
                              class="block bg-gray-100 text-black rounded-md px-3 py-2 text-sm hover:bg-gray-200 transition">
                                {{ $property->judul }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Tombol tetap di bawah --}}
        <a href="/advertise" class="inline-block bg-black text-white px-5 py-2 rounded-full hover:bg-gray-800 transition">
            Pasang iklan
        </a>
    </div>


      <!-- Box Tools -->
      <div class="w-full max-w-xs text-center border border-gray-200 rounded-xl p-19 relative">
        <a href="{{ route('profile.edit') }}">
            <button class="border-b border-gray-300 text-black px-5 py-2 w-full hover:bg-gray-100 transition">
                ✏ Edit profil
            </button>
        </a>

        <button onclick="bukaModal()" class="border-b border-gray-300 text-black px-5 py-2 w-full hover:bg-gray-100 transition">
            🔗 Bagikan Profil
        </button>
      </div>
    </div>


  <!-- Modal Bagikan -->
  <div id="modalBagikan" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-xl w-11/12 max-w-md text-center shadow-lg relative">
      <h2 class="text-lg font-semibold mb-4">Bagikan</h2>
      
      <div class="flex justify-around mb-4">
        @foreach (['LINK', 'Whatsapp', 'Email', 'Linkdn'] as $item)
        <div class="flex flex-col items-center">
          <div class="bg-black p-3 rounded-full text-white">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M18 8a3 3 0 1 0-2.83-2H8.83A3 3 0 1 0 6 8a3 3 0 0 0 .17.99l6.24 3.54A3 3 0 1 0 15 18a3 3 0 0 0-.17-.99l-6.24-3.54A3 3 0 1 0 6 8Z" />
            </svg>
          </div>
          <span class="text-xs mt-2">{{ $item }}</span>
        </div>
        @endforeach
      </div>

      <div class="flex border rounded overflow-hidden text-sm mb-4">
        <input type="text" class="w-full px-3 py-2 bg-gray-100 text-gray-700" value="https://link-profil.com" readonly />
        <button onclick="navigator.clipboard.writeText('https://link-profil.com')" class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600">Salin</button>
      </div>

      <button onclick="tutupModal()" class="absolute top-3 right-4 text-xl text-gray-500 hover:text-black">&times;</button>
    </div>
  </div>

  <script>
    function bukaModal() {
      document.getElementById('modalBagikan').classList.remove('hidden');
    }
    function tutupModal() {
      document.getElementById('modalBagikan').classList.add('hidden');
    }
  </script>
</body>
</html>
