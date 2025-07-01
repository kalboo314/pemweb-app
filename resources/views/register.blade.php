<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-50">

    <div class="bg-white shadow-lg rounded-2xl w-full max-w-md px-8 py-10 text-center">
        <h2 class="text-xl font-semibold text-gray-800">Create an account</h2>
        <p class="text-sm text-gray-500 mt-1 mb-6">Join us and start your journey.</p>

        <form action="{{ route('register') }}" method="POST" class="text-left space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm text-gray-600 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 border rounded-lg border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm text-gray-600 mb-1">Email address</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm text-gray-600 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2 border rounded-lg border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-medium py-2 rounded-full transition">
                Create Account
            </button>
        </form>

        <p class="text-sm text-gray-600 mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="text-yellow-500 hover:underline font-medium">Log in</a>
        </p>
    </div>

</body>
</html>
