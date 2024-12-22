<x-layout>
    <h2> Currently Available mGunawardhana's</h2>

    <ul>
        @foreach($persons as $person)
            <li>
{{--                if we can pass any attribut like this and some time we can pass conditions like this--}}
{{--                <x-card href="/get-and-set/{{$person['id']}}" :highlight="$person['id'] > 5">--}}
                <x-card href="/get-and-set/{{$person['id']}}" :highlight="true">
                    <p>{{$person["name"]}}</p>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>

