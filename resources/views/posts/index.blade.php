@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
        @if(count($posts)>0)
            @foreach($posts as $p)
                <div class="well">
                    <h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
                    <small>Written on {{$p->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts Found</p>
        @endif

@endsection
