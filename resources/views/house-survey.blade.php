<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="relative w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        
        <a href="{{ url('detail/' . $property->id) }}" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl font-bold">&times;</a>

        <h1 class="text-3xl font-bold text-center mb-6">House Survey</h1>
        
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside text-left">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('survey.store') }}" method="POST">
            @csrf
            <input type="hidden" name="property_id" value="{{ $property->id }}">
            <div class="space-y-5">
                <div>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        placeholder="Nama" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                
                <div>
                    <input 
                        type="text" 
                        id="alamat" 
                        name="alamat"
                        placeholder="Alamat Email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <input 
                        type="text" 
                        id="phone" 
                        name="phone" 
                        placeholder="Nomor Telepon"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <input 
                        type="date" 
                        id="tanggal" 
                        name="tanggal" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <textarea 
                        id="catatan" 
                        name="catatan" 
                        rows="5" 
                        placeholder="Type Here..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></textarea>
                </div>

                <div class="text-right">
                    <button 
                        type="submit" 
                        class="bg-black text-white font-semibold py-2 px-6 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

    <input type="hidden" name="property_id" value="{{ $property->id }}">

</body>
</html>