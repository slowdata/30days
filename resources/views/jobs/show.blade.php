<x-layout heading="About">
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>This job pays {{$job->salary}} per year.</p>

    <div class="mt-6 flex space-x-4">
        <p class="">
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </p>
    </div>
</x-layout>
