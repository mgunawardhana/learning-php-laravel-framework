<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mGunawardhana's Network</title>
</head>
<body>
<h2> Currently Available mGunawardhana's</h2>
<ul>
    <p>{{$greeting}}</p>
    <li>
        <a href="/get-and-set/{{$personDetails[0]["id"]}}">
            {{$personDetails[0]["name"]}}
        </a>
    </li>
    <li>
        <a href="/get-and-set/{{$personDetails[1]["id"]}}">
            {{$personDetails[1]["name"]}}
        </a>
    </li>
</ul>
</body>
</html>
