<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>Pays {{$job->salary}} per year</p>

    @can('edit-job', $job)
        <div class="mt-6">
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </div>
    @endcan
</x-layout>