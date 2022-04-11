@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Designers</div>
                    <div class="card-body">
                        <ol>
                            @foreach ($designers as $designer)
                                <li> 
                                    <a href="{{route('designer.edit', $designer)}}">{{$designer->name}} {{$designer->surname}}</a> 
                                    <form method="POST" action="{{route('designer.destroy', $designer)}}">
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






