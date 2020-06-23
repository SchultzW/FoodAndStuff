@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Submitted on {{$post->created_at}}</small>
    <hr>
    <div>
        {{$post->body}}
    </div>
@endsection
