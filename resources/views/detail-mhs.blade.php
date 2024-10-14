<x-layout>
    <x-slot:heading>
        Halaman Detail Mahasiswa
    </x-slot:heading>

    @if (!empty($anggota))
        <ul>
            <li><b>{{ $anggota->nama }}</b></li>
            <li>Asal Mahasiswa : {{ $asalkota->asal_kota }}</li>
            <li>Kode Asal Mahasiswa : {{ $kodeasalkota->kode_asal_kota }}</li>
        </ul>
    @else
        <h1>Detail Mahasiswa</h1>
    @endif
</x-layout>
