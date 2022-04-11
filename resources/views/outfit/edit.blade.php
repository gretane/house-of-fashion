<form method="POST" action="{{route('outfit.update',[$outfit])}}">
    Type: <input type="text" name="outfit_type" value="{{$outfit->type}}">
    Color: <input type="text" name="outfit_color" value="{{$outfit->color}}">
    Size: <input type="text" name="outfit_size" value="{{$outfit->size}}">
    About: <textarea name="outfit_about">{{$outfit->about}}</textarea>
    <select name="designer_id">
    @foreach ($designers as $designer)
    <option value="{{$designer->id}}" @if($designer->id == $outfit->designer_id) 
   selected @endif>
    {{$designer->name}} {{$designer->surname}}
    </option>
    @endforeach
   </select>
    @csrf
    <button type="submit">EDIT</button>
   </form>