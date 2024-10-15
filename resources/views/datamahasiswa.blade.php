<x-layout>
    <x-slot:heading>
        Daftar Mahasiswa
    </x-slot:heading>

    @if (!empty($anggota))
        <ul>
            @foreach ($anggota as $mhs)
                <a href="datamahasiswa/{{$mhs['id']}}" class="text-blue-600 hover:underline">
                    <li>{{ $mhs->nama }}</li>
                </a>
            @endforeach
        </ul>
    @else
        <h1>Detail Mahasiswa</h1>
    @endif
</x-layout>
