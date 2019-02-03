@extends('layouts.admin')

@section('content')
    <div class="col-sm-6">
        <h1>Users</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @if($users)

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="50" src="{{$user->photo?$user->photo->file:'https://placehold.it/400x400'}}",alt=""}}></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h1>Posts</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Tilte</th>
                <th>body</th>
            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height='50' src="{{$post->photo?$post->photo->file:'https://placehold.it/400x400'}}"></td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category?$post->category->name:"Uncategorized"}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body,7)}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    @stop