<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <x-navbar></x-navbar>
    <section class="bg-gray-100 py-20 px-4 flex-grow">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-10">How Can We Help?</h2>

            <!-- Contact Box -->
            <div class="bg-white p-6 rounded-md shadow mb-6 relative">
                <h3 class="text-lg font-semibold">Contact</h3>
                <p class="text-sm text-gray-600">Talk to our member we'll help with your trouble</p>
                <p class="text-sm mt-2 font-medium">+62123456789101</p>
                <!-- Phone Icon -->
                <div class="absolute right-4 top-4 bg-black text-white rounded-full p-2">
                    📞
                </div>
            </div>

            <!-- Email Box -->
            <div class="bg-white p-6 rounded-md shadow mb-10 relative">
                <h3 class="text-lg font-semibold">Email</h3>
                <p class="text-sm text-gray-600">Give us your critics through email</p>
                <a href="mailto:johndoe@gmail.com" class="text-sm mt-2 font-medium block">johndoe@gmail.com</a>
                <!-- Email Icon -->
                <div class="absolute right-4 top-4 bg-black text-white rounded-full p-2">
                    ✉️
                </div>
            </div>

            <!-- Ask Us Box -->
            <div class="bg-white p-6 rounded-md shadow relative">
                <!-- Question Icon -->
                <div class="absolute -left-4 -top-4 bg-black text-white rounded-full p-2">
                    ❓
                </div>

                <h3 class="text-lg font-semibold mb-4">Ask Us</h3>
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="flex gap-4">
                        <input type="text" name="name" placeholder="Nama" class="w-1/2 p-2 border rounded" required>
                        <input type="email" name="email" placeholder="Email" class="w-1/2 p-2 border rounded" required>
                    </div>
                    <textarea name="message" placeholder="Submit Your Request Message" rows="4" class="w-full p-2 border rounded" required></textarea>
                    <button type="submit" class="bg-black text-white px-6 py-1 rounded text-sm">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</body>
</html>