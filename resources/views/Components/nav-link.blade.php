<script src="https://cdn.tailwindcss.com"></script>

@props(['aktif' => false])
<a 
    class="text-sm font-semibold leading-6 text-gray-900 {{$aktif ? 'md:text-blue-700' : ''}}"
    aria-current="{{$aktif ? 'page' : 'false'}}" 
    {{$attributes }}>{{ $slot }}</a>