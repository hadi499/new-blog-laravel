@extends('layouts.main')

@section('content')
   <h1>Posts Category: {{$category}} </h1>
   @foreach ($posts as $post)
       <article>
        <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h2>
        <p>{{$post->body}}</p>
       </article>
   @endforeach
@endsection