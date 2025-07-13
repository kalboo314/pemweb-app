<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md h-screen sticky top-0">
      <div class="px-6 py-4 border-b">
        <h1 class="text-xl font-bold text-gray-700">Admin Panel</h1>
      </div>
      <nav class="px-4 mt-6 space-y-2">
        <a href="#users" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Pengguna</a>
        <a href="#properties" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Properti</a>
        <a href="#surveys" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Survey</a>
        <a href="/" class="block mt-6 text-blue-500 hover:underline">Kembali ke Beranda</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
      <h2 class="text-2xl font-semibold mb-8 text-gray-800">Dashboard Admin</h2>

      <!-- Users -->
      <section id="users" class="mb-14">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Tabel Pengguna</h3>
          <a href="{{ route('admin.user.create') }}" class="text-sm text-white bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">+ Tambah Pengguna</a>
        </div>
        <div class="bg-white rounded-lg shadow overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                <th class="px-4 py-3 text-right"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($users as $user)
              <tr>
                <td class="px-4 py-2">{{ $user->name }}</td>
                <td class="px-4 py-2">{{ $user->email }}</td>
                <td class="px-4 py-2">
                  <form method="POST" action="{{ route('admin.user.updateRole', $user->id) }}">
                    @csrf
                    <select name="role" onchange="this.form.submit()" class="border-gray-300 rounded px-2 py-1">
                      <option value="0" @if(!$user->is_admin) selected @endif>Pengguna</option>
                      <option value="1" @if($user->is_admin) selected @endif>Admin</option>
                    </select>
                  </form>
                </td>
                <td class="px-4 py-2 text-right">
                  <form method="POST" action="{{ route('admin.user.delete', $user->id) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline text-sm">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

      <!-- Properties -->
      <section id="properties" class="mb-14">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Tabel Properti</h3>
          <a href="{{ route('admin.property.create') }}" class="text-sm text-white bg-green-600 px-4 py-2 rounded hover:bg-green-700">+ Tambah Properti</a>
        </div>
        <div class="bg-white rounded-lg shadow overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Lokasi</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                <th class="px-4 py-3 text-right"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($properties as $property)
              <tr>
                <td class="px-4 py-2">{{ $property->judul }}</td>
                <td class="px-4 py-2">{{ $property->lokasi }}</td>
                <td class="px-4 py-2">Rp {{ number_format($property->harga, 0, ',', '.') }}</td>
                <td class="px-4 py-2 text-right">
                  <form method="POST" action="{{ route('admin.property.delete', $property->id) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline text-sm">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

      <!-- Surveys -->
      <section id="surveys">
        <h3 class="text-lg font-semibold text-gray-700 mb-4">Tabel Survey</h3>
        <div class="bg-white rounded-lg shadow overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Properti</th>
                <th class="px-4 py-3 text-right"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($surveys as $survey)
              <tr>
                <td class="px-4 py-2">{{ $survey->nama }}</td>
                <td class="px-4 py-2">{{ $survey->tanggal }}</td>
                <td class="px-4 py-2">{{ $survey->property->judul }}</td>
                <td class="px-4 py-2 text-right">
                  <form method="POST" action="{{ route('admin.survey.delete', $survey->id) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline text-sm">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

    </main>
  </div>
</body>
</html>
