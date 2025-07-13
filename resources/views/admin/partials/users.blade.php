<div>
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
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Password</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Telepon</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Foto Profil</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                    <th class="px-4 py-3 text-right"></th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr>
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2 truncate max-w-[150px] text-xs text-gray-400">{{ $user->password }}</td>
                    <td class="px-4 py-2">{{ $user->phone ?? '-' }}</td>
                    <td class="px-4 py-2">
                        @if ($user->profile_photo)
                        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Foto Profil" class="w-10 h-10 rounded-full object-cover">
                        @else
                        <span class="text-gray-400 italic text-sm">Tidak ada</span>
                        @endif
                    </td>
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
</div>