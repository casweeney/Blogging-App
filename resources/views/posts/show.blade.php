@extends('layout.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <code>Written on {{$post->created_at}}</code>
    <br>
    <a href="/posts" class="btn btn-secondary btn-sm">Go Back</a>
@endsection