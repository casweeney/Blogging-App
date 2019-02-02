@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light btn-sm">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <code>Written on {{$post->created_at}}</code>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger btn-sm'])}}
    {!!Form::close()!!}
@endsection