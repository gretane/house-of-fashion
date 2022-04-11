@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new Designer</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('designer.store')}}">
                            Name: <input type="text" name="designer_name" value="{{old('designer_name')}}"
                            >
                            Surname: <input type="text" name="designer_surname" value="{{old('designer_surname')}}"
                            >
                            @csrf
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

