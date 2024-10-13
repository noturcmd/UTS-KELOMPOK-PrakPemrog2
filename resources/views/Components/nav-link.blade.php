<script src="https://cdn.tailwindcss.com"></script>

@props(['aktif' => false, 'type' => 'a'])

@if ($type === 'a')
<a
    class="{{ $aktif ? 'text-red-700' : 'text-black-300 hover:text-gray-600' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $aktif ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}
</a>

@else
<button
    class="{{ $aktif ? 'text-red-700' : 'text-gray-300 hover:text-gray-600' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $aktif ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}
</button>

@endif

