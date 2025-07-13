<h3 class="text-lg font-semibold text-gray-700 mb-4">Tabel Survey</h3>
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Alamat</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. HP</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Properti</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Catatan</th>
                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($surveys as $survey)
            <tr>
                <td class="px-4 py-2">{{ $survey->nama }}</td>
                <td class="px-4 py-2">{{ $survey->alamat }}</td>
                <td class="px-4 py-2">{{ $survey->phone }}</td>
                <td class="px-4 py-2">{{ $survey->tanggal }}</td>
                <td class="px-4 py-2">{{ $survey->property->judul ?? '-' }}</td>
                <td class="px-4 py-2 max-w-[250px] truncate" title="{{ $survey->catatan }}">
                    {{ \Illuminate\Support\Str::limit($survey->catatan, 50) }}
                </td>
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