<h2>Pizza List</h2>
<p>{{$name}} - {{$base}} - {{$price}}</p>

@if ($price >10)
<p>The pizza is expensive</p>
@elseif ($price <5)
    <p>The pizza is cheap</p>
    @else
    <p>The pizza is normally priced</p>
    @endif