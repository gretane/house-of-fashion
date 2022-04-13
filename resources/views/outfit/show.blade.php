@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Selected outfit</div>
                    <div class="card-body">
                        <article>
                            <p>Type: {{$outfit->type}} </p>
                            <p>Color: <span style="color: {{$outfit->color}};">{{$outfit->color}}</span></p>
                            <p>Size: {{$outfit->type}} </p>
                            <p>About: {{$outfit->about}} </p>
{{--                             
                            @foreach ($designers as $designer)
                                @if ($designer->id == $outfit->designer_id) 
                                    <p>Designer: {{$designer->name}} {{$designer->surname}} </p>
                                
                                @endif
                            @endforeach --}}

                            <p>Designer: {{$outfit->outfitDesigner->name}} {{$outfit->outfitDesigner->surname}} </p>
                        </article>
                        <a href="{{route('outfit.edit',[$outfit])}}" class="btn btn-outline-primary"> Edit </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection