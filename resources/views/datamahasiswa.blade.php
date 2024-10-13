<x-layout>
  <x-slot:heading>
      Halaman Mahasiswa
  </x-slot:heading>

  @if (!empty($pekerjaan))
      <ul>
          @foreach ($pekerjaan as $kerja)
              <li>{{ ucfirst($kerja['judul']) }}</li>
          @endforeach
      </ul>
  @else
    <h1>Detail Mahasiswa</h1>
  @endif
</x-layout>