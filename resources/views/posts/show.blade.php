@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Submitted on {{$post->created_at}}by {{$post->user->email}} </small>
    <hr>
    <div>
        {{$post->body}}
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
    <a href="/post/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'Post','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
        @endif
    @endif
@endsection
