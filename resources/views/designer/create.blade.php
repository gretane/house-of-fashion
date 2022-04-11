<form method="POST" action="{{route('designer.store')}}">
    Name: <input type="text" name="designer_name">
    Surname: <input type="text" name="designer_surname">
    @csrf
    <button type="submit">ADD</button>
   </form>