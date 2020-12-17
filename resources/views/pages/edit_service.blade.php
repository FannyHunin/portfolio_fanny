@auth
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Edit a service</h1>
        <form action="/update_service/{{$newEntry->id}}" method="post" class="d-flex flex-column">
            @csrf
            <label for="">Title : 
                <input type="text" name="name" value="{{$newEntry->name}}">
            </label>
            <label for="">Description : 
                <input type="text" name="description" value="{{$newEntry->description}}">
            </label>
            <label for="">Price : 
                <input type="text" name="price" value="{{$newEntry->price}}">
            </label>
            <button type="submit" class="btn btn-info" style="width: max-content">Update</button>
        </form>
    </div>
@endsection
@endauth