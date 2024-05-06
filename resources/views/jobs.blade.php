<x-layout heading="About">
    <x-slot:heading>Job Listings</x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <span class="font-bold ">{{$job['title']}}:</span>
                    Pays {{$job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
