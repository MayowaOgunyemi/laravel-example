<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['id'] }}">
                <li><strong> {{$job['title']}} </strong>: Pays {{$job['salary']}} per year</li>
            </a>
        @endforeach
    </ul>
</x-layout>