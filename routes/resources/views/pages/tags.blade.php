@auth
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Create your tags</h1>
        <form action="add_tags" method="post">
            @csrf
            <label for="">Tag name : 
                <input type="text" name="name">
            </label>
            <button type="submit">Create</button>
        </form>

        <div>
            <div class="row w-50">
                @foreach ($tagData as $item)
                <div class="col-2">
                    <div class="alert alert-success p-2" style="width: max-content" role="alert">
                        {{$item->name}}
                    </div>
                </div>
                @if ($loop->iteration % 6 == 0)
                </div>
                <div class="row">
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@endauth