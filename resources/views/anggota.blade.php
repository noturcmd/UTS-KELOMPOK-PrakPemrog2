<x-layout>
    <x-slot:heading>
        Halaman Anggota Mahasiswa
    </x-slot:heading>
    <ul>
        {{-- ini aku copy dari project yang di kelas, belum kuubah --}}
        @foreach ($pekerjaan as $kerja)
        <a href="{{ route('listkerja.show', $kerja->id) }}" class="text-blue-600 hover:underline">
            <li><b>{{ $kerja->judul }} :</b> {{ $kerja->gaji }} / bulan </li>
        </a>
        @endforeach
    </ul>
</x-layout>