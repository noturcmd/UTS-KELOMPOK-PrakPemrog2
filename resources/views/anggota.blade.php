<x-layout>
    <x-slot:heading>
        Anggota
    </x-slot:heading>

    @if (!empty($daftaranggota) && count($daftaranggota) > 0)

        <div class="flex justify-center">
            <div class="max-w-md">
                @foreach ($daftaranggota as $mhs)
                    <p class="text-justify">Anggota {{ $mhs['id'] }} : {{ $mhs['nim'] }} - {{ $mhs['nama'] }}</p>
                @endforeach
            </div>
        </div>
    @else
        <h1>Detail Mahasiswa Tidak Ditemukan</h1>
    @endif
</x-layout>
