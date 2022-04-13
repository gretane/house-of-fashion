@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h4>Outfits</h4>
                        <form action="{{route('outfit.index')}}" method="GET">
                            <fieldset>
                                <select name="designer_id"> 
                                    <option value="0" disabled selected>Select designer</option>
                                    <option disabled>-----</option>
                                    @foreach ($designers as $designer)
                                        <option value="{{$designer->id}}" @if ($designer_id == $designer->id) selected @endif>{{$designer->name}} {{$designer->surname}} </option>
                                    @endforeach
                                </select>
                                    <button type="submit" name="filter" class="btn btn-outline-primary" value="designer"> Filter </button>
                            </fieldset>
                        </form>
                        <a href="{{route('outfit.index')}}" class="btn btn-outline-dark">Reset</a>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($outfits as $outfit)
                                <li>
                                    <div>
                                        <p>{{$outfit->type}} by {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}}</p>
                                        <a href="{{route('outfit.show',[$outfit])}}" class="btn btn-outline-dark"> Show </a>
                                        <a href="{{route('outfit.edit',[$outfit])}}" class="btn btn-outline-primary"> Edit </a>
                                    </div> 
                                    <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        {{$outfits->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

