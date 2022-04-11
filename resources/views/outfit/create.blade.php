@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new outfit</div>
                    <div class="card-body">
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
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



   