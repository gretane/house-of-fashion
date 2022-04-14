@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new Designer</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('designer.store')}}" enctype="multipart/form-data">
                            <label for="designer_name">Name:</label>
                            <input type="text" id="designer_name" name="designer_name" value="{{old('designer_name')}}">
                            <label for="designer_surname">Surname:</label>
                            <input type="text" id="designer_surname" name="designer_surname" value="{{old('designer_surname')}}">
                            {{-- <label for=designer_photo">Select photo:</label>
                            <input type="file" id="designer_photo" name="designer_photo">  --}}
                            @csrf
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

