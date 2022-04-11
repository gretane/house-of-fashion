@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit outfit info</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('outfit.update',[$outfit])}}">
                            Type: <input type="text" name="outfit_type" value="{{old('outfit_type', $outfit->type)}}">
                            Color: <input type="text" name="outfit_color" value="{{old('outfit_color', $outfit->color)}}">
                            Size: <input type="text" name="outfit_size" value="{{old('outfit_size', $outfit->size)}}">
                            About: <textarea name="outfit_about">{{old('outfit_about', $outfit->about)}}</textarea>
                            <select name="designer_id" value="{{old('designer_id', $outfit->designer_id)}}">
                                @foreach ($designers as $designer)
                                    <option value="{{$designer->id}}" @if($designer->id == $outfit->designer_id) selected @endif>
                                        {{$designer->name}} {{$designer->surname}}
                                    </option>
                                @endforeach
                           </select>
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

