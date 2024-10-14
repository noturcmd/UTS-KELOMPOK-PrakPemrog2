<x-layout>
    <x-slot:heading>
        Halaman Detail Mahasiswa
    </x-slot:heading>

    @if (!empty($anggota))
        <ul>
            <li><b>{{ $anggota->nama }}</li>
            <li><b>Asal : {{ $anggota->asal_kota }}</li>
            <li><b>Kode Asal : {{ $anggota->kode_asal_kota }}</li>
        </ul>
    @else
        <h1>Detail Mahasiswa</h1>
    @endif
</x-layout>
