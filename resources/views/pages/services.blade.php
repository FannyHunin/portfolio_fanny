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
            <label for="">Description : 
                <input type="text" name="description">
            </label>
            <label for="">Price : 
                <input type="text" name="price">
            </label>
            <button type="submit" class="btn btn-info" style="width: max-content">Create</button>
        </form>
        <hr>
        <div class="row">
            @foreach ($serviceData as $item)
                <div class="col-4">
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                    <p>{{$item->price}}€</p>
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