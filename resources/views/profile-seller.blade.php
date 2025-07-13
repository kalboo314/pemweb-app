<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil {{ $user->name }}</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-white text-center font-sans text-gray-800">
  <x-navbar></x-navbar>

  <section class="pt-20 py-10">

    {{-- Foto Profil --}}
    <div class="flex justify-center">
      <img class="w-60 h-60 rounded-full object-cover mb-4"
           src="{{ $user->profile_photo 
               ? asset('uploads/' . $user->profile_photo) 
               : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }}" 
           alt="Foto Profil">
    </div>

    {{-- Nama dan Bio --}}
    <h1 class="text-2xl font-semibold mt-2">{{ $user->name }}</h1>
    <p class="text-gray-500">
      {{ $user->bio ?? 'Belum mengisi bio.' }}
    </p>

    {{-- Box Iklan --}}
    <div class="mt-10 px-6 flex justify-center">
      <div class="border border-gray-200 rounded-xl p-6 w-full max-w-sm text-center relative h-[300px] flex flex-col justify-between">
          @php
              $properties = $user->properties;
          @endphp

          @if($properties->isEmpty())
              <img src="https://cdn-icons-png.flaticon.com/512/8674/8674834.png" alt="Iklan Kosong" class="w-24 mx-auto mb-4">
              <p class="mb-4">Pengguna ini belum memasang iklan</p>
          @else
              <div class="overflow-y-auto max-h-[220px] pr-1 text-left">
                  <p class="text-sm text-gray-500 mb-3 font-semibold">Daftar Iklan:</p>
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
      </div>
    </div>

    {{-- Email dan Instagram --}}
    <div class="mt-6 flex justify-center gap-4">
        <a href="mailto:{{ $user->email }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 hover:text-black" viewBox="0 0 24 24" fill="currentColor">
                <path d="M2 4a2 2 0 012-2h16a2 2 0 012 2v1.5l-10 6L2 5.5V4zm0 3.5l8.245 4.947a1.5 1.5 0 001.51 0L22 7.5V20a2 2 0 01-2 2H4a2 2 0 01-2-2V7.5z" />
            </svg>
        </a>

        @if($user->instagram)
        <a href="{{ $user->instagram }}" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 hover:text-black" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-2a1 1 0 100 2 1 1 0 000-2z"/>
            </svg>
        </a>
        @endif
    </div>

  </section>
</body>
</html>
