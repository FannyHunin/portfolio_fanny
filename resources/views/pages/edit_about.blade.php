@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Edit a description about yourself</h1>
    <form action="/update_about/{{$newEntry->id}}" method="post">
        @csrf
        <label for="description">
           <textarea name="description" id="" cols="30" rows="10">{{$newEntry->description}}</textarea>
        </label>
        <button type="submit" class="btn btn-info">Update</button>
    </form>
</div>
@endsection