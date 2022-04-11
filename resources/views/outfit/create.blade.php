<form method="POST" action="{{route('outfit.store')}}">
    Type: <input type="text" name="outfit_type">
    Color: <input type="text" name="outfit_color">
    Size: <input type="number" name="outfit_size">
    About: <textarea name="outfit_about"></textarea>
    <select name="designer_id">
    @foreach ($designers as $designer)
    <option value="{{$designer->id}}">{{$designer->name}} {{$designer->surname}} </option>
    @endforeach
   </select>
    @csrf
    <button type="submit">ADD</button>
   </form>
   