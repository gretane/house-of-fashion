<ol>
@foreach ($designers as $designer)
    <li> 
        <a href="{{route('designer.edit', $designer)}}">{{$designer->name}} {{$designer->surname}}</a> 
        <form method="POST" action="{{route('designer.destroy', $designer)}}">
            @csrf
            <button type="submit">DELETE</button>
        </form>
    </li>
@endforeach
</ol>




