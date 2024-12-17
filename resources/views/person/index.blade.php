<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mGunawardhana's Network</title>
</head>
<body>
<h2> Currently Available mGunawardhana's</h2>

{{--how to use if--}}
@if($greeting == "hi") <p>Hi from inside the if statement</p> @endif

<ul>
    @foreach($personDetails as $person)
        <li>
            <p>{{$person["name"]}}</p>
            <a href="/get-and-set/{{$person['id']}}">View Details</a>
        </li>

        @switch($person["id"])
            @case(1)
                <h1>First Person</h1>
                @break

            @case(2)
                <h1>Second Person</h1>
                @break

            @default
                <h1>Unknown Person</h1>
        @endswitch
    @endforeach



{{--    old method --}}
{{--    <p>{{$greeting}}</p>--}}
{{--    <li>--}}
{{--        <a href="/get-and-set/{{$personDetails[0]["id"]}}">--}}
{{--            {{$personDetails[0]["name"]}}--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <a href="/get-and-set/{{$personDetails[1]["id"]}}">--}}
{{--            {{$personDetails[1]["name"]}}--}}
{{--        </a>--}}
{{--    </li>--}}
</ul>
</body>
</html>
