{{-- This is used to declare a property within an anchor tag --}}
{{-- The 'active' property is used to determine if the link is currently active --}}
@props(['active' => false, 'type' => 'a'])

{{-- The 'type' property is used to conditionally render either an anchor tag or a button --}}
{{-- If type is 'a', render an anchor tag, otherwise render a button --}}
@if ($type === 'a')
    <a 
        aria-current="{{ $active ? 'page' : 'false' }}"
        class= "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" 
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        aria-current="{{ $active ? 'page' : 'false' }}"
        class= "{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" 
        {{ $attributes }}
    >
        {{ $slot }}
    </button>
@endif
{{-- End of anchor tag declaration --}}