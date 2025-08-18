{{-- This is used to declare a property within an anchor tag --}}
@props(['active' => false, 'type' => ['a', 'button']])

<a 
    aria-current="{{ $active ? 'page' : 'false' }}"
    class= "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" 
    {{ $attributes }}
>
    {{ $slot }}
</a>