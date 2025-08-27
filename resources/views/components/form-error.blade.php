@props(['name'])

@error($name)
    <p {{$attributes->merge(['class' => 'text-red-500 text-xs italic font-bold mt-1'])}}>
        {{ $message }}
    </p>
    {{-- <p class="text-red-500 text-xs italic font-bold mt-1">{{ $message }}</p> --}}
@enderror