@auth
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Add a service</h1>
        <form action="/add_service" method="post" class="d-flex flex-column">
            @csrf
            <label for="">Title : 
                <input type="text" name="name">
            </label>
            <button type="submit" class="btn btn-info" style="width: max-content">Create</button>
        </form>
        <hr>
        <div class="row">
            @foreach ($serviceData as $item)
                <div class="col-4">
                    <h3>{{$item->name}}</h3>
                    <div>
                        <a href="/delete_service/{{$item->id}}" class="btn btn-danger">Delete</a>
                        <a href="/edit_service/{{$item->id}}"class="btn btn-info">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@endauth