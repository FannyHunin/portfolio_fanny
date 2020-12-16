@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Create a description about yourself</h1>
        <form action="/add_about" method="post">
            @csrf
            <label for="description">
               <textarea name="description" id="" cols="30" rows="10"></textarea>
            </label>
            <button type="submit" class="btn btn-info">Create</button>
        </form>
        <hr>
        <div>
            @foreach ($aboutData as $item)
                <p>{{$item->description}}</p>
                    <a class="btn btn-info" href="/edit_about/{{$item->id}}">Edit</a>
            @endforeach
        </div>
    </div>
@endsection