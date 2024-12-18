<x-layout>
    <h2> Currently Available mGunawardhana's</h2>

    <ul>
        @foreach($personDetails as $person)
            <li>
                <p>{{$person["name"]}}</p>
                <a href="/get-and-set/{{$person['id']}}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>

