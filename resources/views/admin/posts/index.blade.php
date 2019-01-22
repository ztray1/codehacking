@extends('layouts.admin')

@section('content')

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
               <th>Created</th>
               <th>Updated</th>
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
               <td>{{$post->body}}</td>
               <td>{{$post->created_at->diffForhumans()}}</td>
               <td>{{$post->updated_at->diffForhumans()}}</td>
           </tr>
         @endforeach
         @endif
         </tbody>
       </table>


    @stop