@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Designers</h4>
                        <form action="{{route('designer.index')}}" method="GET">
                            <fieldset>
                            <legend><h5>Sort:</h5></legend>
                                <button type="submit" name="sort" class="btn btn-outline-primary" value="by_name_az"> By name(a-z)</button>
                                <button type="submit" name="sort" class="btn btn-outline-primary" value="by_name_za"> By name(z-a)</button>
                                <button type="submit" name="sort" class="btn btn-outline-primary" value="by_surname_az"> By surname(a-z)</button>
                                <button type="submit" name="sort" class="btn btn-outline-primary" value="by_surname_za"> By surname(z-a)</button>
                            </fieldset>
                        </form>
                            <a href="{{route('designer.index')}}" class="btn btn-outline-primary">Reset</a>
                    </div>
                    <div class="card-body">
                        <ol>
                            @foreach ($designers as $designer)
                                <li class="designer-index-list"> 
                                    <div class="designer-index-info">
                                        <b>{{$designer->name}} {{$designer->surname}}</b>
                                        @if ($designer->designerOutfits->count())
                                            <p> <small> Works on {{$designer->designerOutfits->count()}} outfit(s). </small> </p>
                                        @else 
                                        <p> <small> Currently there are no outfits. </small> </p>
                                        @endif
                                    </div>
                                    <div class="designer-index-btn">
                                        <a class="btn btn-outline-primary" href="{{route('designer.edit', $designer)}}"> Edit </a> 
                                        <form method="POST" action="{{route('designer.destroy', $designer)}}">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






