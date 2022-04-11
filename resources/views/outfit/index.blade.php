<ol>
@foreach ($outfits as $outfit)
<li> 
    <a href="{{route('outfit.edit',[$outfit])}}">{{$outfit->title}} {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}}</a>
    <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
        @csrf
        <button type="submit">DELETE</button>
    </form>
</li>
@endforeach
</ol>