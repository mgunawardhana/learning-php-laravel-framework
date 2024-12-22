<x-layout>
    <h2> Currently Available mGunawardhana's</h2>

    <ul>
        @foreach($personDetails as $person)
            <li>
                <x-card>
                    <p>{{$person["name"]}}</p>
                    <a href="/get-and-set/{{$person['id']}}">View Details</a>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>

