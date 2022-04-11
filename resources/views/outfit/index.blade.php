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
                                    <div>
                                        <p>{{$outfit->type}} by {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}}</p>
                                        <a href="{{route('outfit.edit',[$outfit])}}" class="btn btn-outline-primary"> Edit </a>
                                    </div> 
                                    <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
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

