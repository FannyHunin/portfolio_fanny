@auth
    @extends('adminlte::page')
    
    @section('content')
    <div class="container">
        <h1>Edit your profile</h1>
        @foreach ($userData as $item)
            <form class="d-flex flex-column" action="/update_profile" method="post">
                @csrf
                <label for="name">Name
                    <input type="text" name="name" value="{{$item->name}}">
                </label>
                <label for="email">Email
                    <input type="email" name="email" value="{{$item->email}}">
                </label>
                <label for="location">Map location :
                    <input type="text" name="location">
                </label>
                <label for="password">Password
                    <input type="text" name="password">
                </label>
                <button type="submit" class="btn btn-info" style="width: max-content">Update</button>
            </form>
        @endforeach
    </div>
    @endsection
@endauth