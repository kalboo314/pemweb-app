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
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-12">
        
        <main class="py-8">
            <section class="mb-8">
                <h1 class="text-3xl font-bold text-slate-900 mb-6">Pent House</h1>
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
                
                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.1s;">
                    <div class="relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/ea/ee/93/eaee933522569d31c2e1d1550d4b5853.jpg" alt="Luxury Family Home" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Luxury Family Home</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">JAKARTA PUSAT</p>
                        <p class="text-lg font-bold text-slate-900">Rp6.500.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">4</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">400</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.2s;">
                    <div class="relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/51/c9/45/51c945e69d73829f9a5a6172afa5f81f.jpg" alt="New Apartment" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                     <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">New Apartment Nice View</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">JAKARTA SELATAN</p>
                        <p class="text-lg font-bold text-slate-900">Rp10.000.000 <span class="text-amber-600 font-medium">/month</span></p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">1</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">450</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.3s;">
                    <div class="relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/1e/dd/6c/1edd6cd0f3c631a009fdf5856bf8180b.jpg" alt="Skyper Pool Apartment" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Skyper Pool Apartment</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BEKASI</p>
                        <p class="text-lg font-bold text-slate-900">Rp5.000.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">430</span></div>
                        </div>
                    </div>
                </div>
                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.4s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=870" alt="Cozy Studio Apartment" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Cozy Studio Apartment</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">TANGERANG</p>
                        <p class="text-lg font-bold text-slate-900">Rp4.500.000 <span class="text-amber-600 font-medium">/month</span></p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">1</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">350</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.5s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=870" alt="Modern House with Pool" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Modern House with Pool</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">DEPOK</p>
                        <p class="text-lg font-bold text-slate-900">Rp8.200.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">5</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">600</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.6s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?q=80&w=870" alt="Villa with Ocean View" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Villa with Ocean View</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BALI</p>
                        <p class="text-lg font-bold text-slate-900">Rp15.000.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">6</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">4</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">800</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mt-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Apartment</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.1s;">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=870" alt="Urban Chic Apartment" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">Urban Chic Apartment</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">JAKARTA PUSAT</p>
                            <p class="text-lg font-bold text-slate-900">Rp9.500.000 <span class="text-amber-600 font-medium">/month</span></p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">1</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">320</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.2s;">
                        <div class="relative overflow-hidden">
                            <img src="https://i.pinimg.com/736x/b3/ee/5a/b3ee5a3a1909304756d86105c443f5fa.jpg" alt="Minimalist Studio Loft" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">Minimalist Studio Loft</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BANDUNG</p>
                            <p class="text-lg font-bold text-slate-900">Rp1.800.000.000</p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">1</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">300</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.3s;">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?q=80&w=870" alt="City View Residence" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">City View Residence</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">SURABAYA</p>
                            <p class="text-lg font-bold text-slate-900">Rp12.000.000 <span class="text-amber-600 font-medium">/month</span></p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">2</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">450</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.4s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=870" alt="Spacious Green Apartment" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Spacious Green Apartment</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">JAKARTA SELATAN</p>
                        <p class="text-lg font-bold text-slate-900">Rp3.200.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">550</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.5s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=780" alt="Classic Heritage Flat" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                             <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Classic Heritage Flat</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">YOGYAKARTA</p>
                        <p class="text-lg font-bold text-slate-900">Rp7.000.000 <span class="text-amber-600 font-medium">/month</span></p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">1</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">420</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.6s;">
                    <div class="relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/ae/5e/35/ae5e35035cccae513d85bc7a4c79e7f2.jpg" alt="Rooftop Garden Unit" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Rooftop Garden Unit</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">SEMARANG</p>
                        <p class="text-lg font-bold text-slate-900">Rp2.500.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">500</span></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Town House</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.1s;">
                        <div class="relative overflow-hidden">
                            <img src="https://i.pinimg.com/736x/1b/78/fa/1b78fadec746282e0c3e4dd4ffeac35e.jpg" alt="Verdant Heights Townhouse" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">Verdant Heights Townhouse</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BOGOR</p>
                            <p class="text-lg font-bold text-slate-900">Rp2.800.000.000</p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">3</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">250</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.2s;">
                        <div class="relative overflow-hidden">
                            <img src="https://i.pinimg.com/736x/f8/96/84/f8968476ea34911f5a48c14407779727.jpg" alt="The Legacy Cluster" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                            </div>
                        </div>
                         <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">The Legacy Cluster</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BINTARO</p>
                            <p class="text-lg font-bold text-slate-900">Rp4.100.000.000</p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">4</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">3</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">300</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.3s;">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=80&w=870" alt="Citra Garden Residence" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-slate-900 mb-1">Citra Garden Residence</h3>
                            <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">SURABAYA</p>
                            <p class="text-lg font-bold text-slate-900">Rp120.000.000 <span class="text-amber-600 font-medium">/year</span></p>
                            <hr class="my-4 border-gray-200">
                            <div class="flex items-center justify-start gap-6 text-slate-600">
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">3</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">3</span></div>
                                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">280</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.4s;">
                    <div class="relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/73/16/11/731611bd745f32fda9695942a5fb20b3.jpg" alt="Japanese Minimalist Houses" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Japanese Minimalist Houses</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">TANGERANG SELATAN</p>
                        <p class="text-lg font-bold text-slate-900">Rp2.950.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">220</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.5s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=870" alt="Pasadena Residence" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-emerald-600/90">FOR RENT</span>
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FEATURED</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Pasadena Residence</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">JAKARTA TIMUR</p>
                        <p class="text-lg font-bold text-slate-900">Rp250.000.000 <span class="text-amber-600 font-medium">/year</span></p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">4</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">320</span></div>
                        </div>
                    </div>
                </div>

                <div class="group property-card bg-white rounded-2xl border border-gray-200 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden opacity-0 animate-fadeUp" style="animation-delay: 0.6s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1593349480503-6258d45c54c3?q=80&w=774" alt="Metropolitan Estate" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="py-1.5 px-2.5 rounded-md text-white text-xs font-bold uppercase backdrop-blur-sm bg-slate-900/70">FOR SALE</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-1">Metropolitan Estate</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wider mb-3">BEKASI</p>
                        <p class="text-lg font-bold text-slate-900">Rp2.100.000.000</p>
                        <hr class="my-4 border-gray-200">
                        <div class="flex items-center justify-start gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg><span class="font-medium">3</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025a5.25 5.25 0 0 1 4.45 6.11 5.25 5.25 0 0 1-2.91 4.154a5.25 5.25 0 0 1-5.315.082A5.25 5.25 0 0 1 8.25 12a5.25 5.25 0 0 1-1.04-2.875a5.25 5.25 0 0 1 4.79-4.375Z" /></svg><span class="font-medium">2</span></div>
                            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75v4.5m0-4.5h-4.5m4.5 0L15 9m5.25 11.25v-4.5m0 4.5h-4.5m4.5 0L15 15" /></svg><span class="font-medium">200</span></div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>