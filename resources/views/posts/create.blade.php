@extends('layouts.app')

@section('content')

    <h1>Create a Post</h1>
    <!--taken from https://laravelcollective.com/docs/6.0/html-->
    {!! Form::open(['action'=>'PostController@store','method'=>'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
