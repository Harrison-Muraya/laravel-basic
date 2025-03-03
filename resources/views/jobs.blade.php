<x-layout>
    <x-slot:heading>
       jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/job/{{$job['id']}}">
                 <li><strong>hello am {{$job['title']}}</strong> an i get a salary of {{$job['salary']}} per year</li>
            </a>
        @endforeach
    </ul>
</x-layout>