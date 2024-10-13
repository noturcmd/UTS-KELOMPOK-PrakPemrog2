<x-layout>
  <x-slot:heading>
      UTS Praktik Pemrograman 2
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
