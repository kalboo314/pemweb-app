<div class="flex justify-between items-center mb-4">
    <h3 class="text-lg font-semibold text-gray-700">Tabel Properti</h3>
    <a href="{{ route('admin.property.create') }}" class="text-sm text-white bg-green-600 px-4 py-2 rounded hover:bg-green-700">+ Tambah Properti</a>
</div>

<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tipe Bangunan</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Luas Bangunan</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Luas Tanah</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Lokasi</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sertifikat</th>
                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($properties as $property)
            <tr>
                <td class="px-4 py-2">{{ $property->judul }}</td>
                <td class="px-4 py-2">{{ $property->tipe_bangunan }}</td>
                <td class="px-4 py-2">{{ $property->luas_bangunan }} m²</td>
                <td class="px-4 py-2">{{ $property->luas_tanah }} m²</td>
                <td class="px-4 py-2">{{ $property->lokasi }}</td>
                <td class="px-4 py-2">Rp {{ number_format($property->harga, 0, ',', '.') }}</td>
                <td class="px-4 py-2 max-w-[300px] truncate" title="{{ $property->deskripsi }}">
                    {{ Str::limit($property->deskripsi, 50) }}
                </td>
                <td class="px-4 py-2">
                    @if ($property->sertifikat_original_name)
                    <a href="{{ asset('storage/sertifikat/' . $property->sertifikat_original_name) }}"
                        target="_blank" class="text-blue-500 underline text-sm">Lihat</a>
                    @else
                    <span class="text-gray-400 italic text-sm">Tidak ada</span>
                    @endif
                </td>
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