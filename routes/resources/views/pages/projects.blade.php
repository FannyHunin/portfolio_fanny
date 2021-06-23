@auth
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Create a new project</h1>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: max-content">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/add_project" method="post" enctype="multipart/form-data" style="display: flex; flex-direction : column">
            @csrf
            <label for="name">Project's name :
                <input type="text" name="name">
            </label>
            <label for="description">Project's description :
                <input type="text" name="description">
            </label>
            <label for="link">Project's link :
                <input type="text" name="link">
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
            <label for="src4">Image 4 :
                <input type="file" name="src4">
            </label>
            <label for="src5">Image 5 :
                <input type="file" name="src5">
            </label>
            <label for="tags_id">Tags :
                <select name="tags_id" id="">
                    @foreach ($tagData as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </label>
            <button class="btn btn-info" type="submit" style="width: max-content">Create</button>
        </form>
        <hr>
        <div>
            @foreach ($projectData as $item)
                <div class="w-25 mt-5">
                    <h3>{{$item->name}}</h3>
                    <h5>{{$item->description}}</h5>
                    <a href="{{$item->link}}">{{$item->link}}</a >
                    <div class="d-flex">
                        <img class="img-fluid" src="{{asset('images/'.$item->src1)}}" alt="">
                        <img class="img-fluid" src="{{asset('images/'.$item->src2)}}" alt="">
                        <img class="img-fluid" src="{{asset('images/'.$item->src3)}}" alt="">
                        <img class="img-fluid" src="{{asset('images/'.$item->src4)}}" alt="">
                        <img class="img-fluid" src="{{asset('images/'.$item->src5)}}" alt="">

                    </div>
                    <p>{{$item->tags->name}}</p>
                </div>
                <div style="display: flex; flex-direction : row;">
                    <a href="/delete_project/{{$item->id}}" class="btn btn-danger mr-2">Delete</a>
                    <a href="/edit_project/{{$item->id}}" class="btn btn-info mr-2">Edit</a>
                    <form action="/send_alert" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">Send an alert to my subscribers</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@endauth