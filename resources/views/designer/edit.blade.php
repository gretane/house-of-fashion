<form method="POST" action="{{route('designer.update',$designer)}}">
    Name: <input type="text" name="designer_name" value="{{$designer->name}}">
    Surname: <input type="text" name="designer_surname" value="{{$designer->surname}}">
    @csrf
    <button type="submit">EDIT</button>
   </form>