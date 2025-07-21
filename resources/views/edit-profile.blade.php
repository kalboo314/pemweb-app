<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <div class="max-w-4xl mx-auto p-6 pt-25">
        <div class="flex items-center space-x-6 mb-6">
            <div class="relative">
                {{-- Gambar Preview --}}
                <img id="preview-img" class="w-24 h-24 rounded-full object-cover"
                    src="{{ $user->profile_photo ? asset('uploads/' . $user->profile_photo) : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }}"
                    alt="Profile Photo">

                {{-- Tombol Ganti Gambar --}}
                <label for="photo" class="absolute bottom-0 right-0 bg-white rounded-full p-1 cursor-pointer shadow">
                    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C8.7 0 6 2.7 6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm6 14h-3l-2 3H9l-2-3H4c-1.1 0-2 .9-2 2v6h20v-6c0-1.1-.9-2-2-2z"/>
                    </svg>
                </label>
            </div>
        </div>

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            {{-- Input File Hidden --}}
            <input type="file" name="photo" id="photo" class="hidden" accept="image/*">

            <div>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Nama" maxlength="30"
                    class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div>
                <textarea name="bio" placeholder="Bio (Opsional)" maxlength="250"
                    class="w-full border border-gray-300 p-2 rounded">{{ old('bio', $user->bio) }}</textarea>
            </div>

            <div>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Masukan Nomor Hp"
                    class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email"
                    class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div>
                <input type="url" name="instagram" value="{{ old('instagram', $user->instagram) }}" placeholder="Link Instagram"
                    class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="flex justify-end space-x-4">
                <button type="button" onclick="history.back()" 
                    class="bg-gray-200 text-gray-700 px-5 py-2 rounded-full hover:bg-gray-300 transition">
                    Batal
                </button>

                <button type="submit" 
                    class="bg-gray-800 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                    Simpan
                </button>
            </div>

        </form>
    </div>

    {{-- Script Preview Gambar --}}
    <script>
        const photoInput = document.getElementById('photo');
        const previewImg = document.getElementById('preview-img');

        photoInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
