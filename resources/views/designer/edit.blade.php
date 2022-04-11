@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit designer info</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('designer.update',$designer)}}">
                            Name: <input type="text" name="designer_name" value="{{old('designer_name', $designer->name)}}">
                            Surname: <input type="text" name="designer_surname" value="{{old('designer_surname', $designer->surname)}}">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

