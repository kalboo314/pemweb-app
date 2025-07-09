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
        
        <a href="#" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl font-bold">&times;</a>

        <h1 class="text-3xl font-bold text-center mb-6">House Survey</h1>

        <?php
        // Jika ada pesan sukses, tampilkan di sini
        if (!empty($success_message)) :
        ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline"><?php echo $success_message; ?></span>
                <div class="mt-4 text-sm">
                    <p><strong>Nama:</strong> <?php echo $submitted_data['Nama']; ?></p>
                    <p><strong>Alamat:</strong> <?php echo $submitted_data['Alamat']; ?></p>
                    <p><strong>Catatan:</strong> <?php echo $submitted_data['Catatan']; ?></p>
                </div>
            </div>
        <?php endif; ?>


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
                        placeholder="Alamat / Email"
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