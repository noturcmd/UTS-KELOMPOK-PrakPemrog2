<x-layout>
  <x-slot:heading>
      Halaman Home
  </x-slot:heading>

  @if (!empty($pekerjaan))
      <ul>
          @foreach ($pekerjaan as $kerja)
              <li>{{ ucfirst($kerja['judul']) }}</li>
          @endforeach
      </ul>
  @else
      <p>Tidak ada pekerjaan ditemukan.</p>
  @endif
</x-layout>