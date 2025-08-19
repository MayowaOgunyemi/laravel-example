<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    
    @foreach ($jobs as $job)
        <li><strong> {{$job['title']}} </strong>: Pays {{$job['salary']}} per year</li>
    @endforeach
</x-layout>