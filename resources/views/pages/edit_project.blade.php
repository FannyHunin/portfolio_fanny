@auth
@extends('adminlte::page')

@section('content')
<h1>Edit your project</h1>
<form action="/update_project/{{$newEntry->id}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction : column">
    @csrf
    <label for="name">Project's name :
        <input type="text" name="name" value="{{$newEntry->name}}">
    </label>
    <label for="description">Project's description :
        <input type="text" name="description" value="{{$newEntry->description}}">
    </label>
    <label for="link">Project's link :
        <input type="text" name="link" value="{{$newEntry->link}}">
    </label>
    <label for="src1">Image 1 :
        <input type="file" name="src1">
    </label>
    <label for="src2">Image 2 :
        <input type="file" name="src2">
    </label>
    <label for="src3">Image 3 :
        <input type="file" name="src3">
    </label>
    <label for="tags_id">Tags :
        <select name="tags_id" id="">
            @foreach ($tagData as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </label>
    <button class="btn btn-info" type="submit" style="width: max-content">Update</button>
</form>
@endsection
@endauth