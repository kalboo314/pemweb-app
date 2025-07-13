<!DOCTYPE html>
<html lang="id" x-data="{ tab: 'users' }" xmlns:x-on="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md h-screen sticky top-0">
      <div class="px-6 py-4 border-b">
        <h1 class="text-xl font-bold text-gray-700">Admin Panel</h1>
      </div>
      <nav class="px-4 mt-6 space-y-2">
        <button @click="tab = 'users'" class="block w-full text-left px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Pengguna</button>
        <button @click="tab = 'properties'" class="block w-full text-left px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Properti</button>
        <button @click="tab = 'surveys'" class="block w-full text-left px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Survey</button>
        <button @click="tab = 'contact'" class="block w-full text-left px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Contact Us</button>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" class="mt-6">
          @csrf
          <button type="submit" class="text-red-500 hover:underline w-full text-left px-4 py-2">
            Logout
          </button>
        </form>
      </nav>

    </aside>


    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
      <h2 class="text-2xl font-semibold mb-8 text-gray-800">Dashboard Admin</h2>

      <!-- Dynamic Content -->
      <div x-show="tab === 'users'">
        @include('admin.partials.users')
      </div>

      <div x-show="tab === 'properties'">
        @include('admin.partials.properties')
      </div>

      <div x-show="tab === 'surveys'">
        @include('admin.partials.surveys')
      </div>

      <div x-show="tab === 'contact'">
        @include('admin.partials.contactus')
      </div>


    </main>
  </div>
</body>

</html>