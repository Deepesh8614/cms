@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Category_ID</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
    
    @if($posts)
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td><img height="50" src="{{$post->photo->file}}" alt="No Photo" /></td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

@stop