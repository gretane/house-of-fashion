@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All outfits</div>
                    <div class="card-body">
                        <ol>
                            @foreach ($outfits as $outfit)
                                <li> 
                                    <a href="{{route('outfit.edit',[$outfit])}}">{{$outfit->type}} by {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}}</a>
                                    <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
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

