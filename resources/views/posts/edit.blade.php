@extends('layouts.app')

@section('content')

    <h1>Edit a Post</h1>
    <!--taken from https://laravelcollective.com/docs/6.0/html-->
    {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    {{Form::hidden('_method','PUT')}}<!--this allows us to spoof a put req. we are only allowed to do get and post like this-->
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
