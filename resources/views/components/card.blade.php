{{-- we can use highlight prop like this --}}
@props(['highlight' => false])

{{-- key should be the class names and values should be booleans if the boolean was false class isn't add to the
element, and the other css classes can be added like this ex: card --}}
<div @class(['$highlight' => $highlight, 'card'])>
    {{$slot}}
    {{-- Get the href attribute from $attributes --}}
    <a href="{{$attributes->get('href')}}" class="btn">View Details</a>
</div>
