@extends('layouts.main')

@section('content')
   <h1>Halaman Blog Posts</h1>
   @foreach ($posts as $post)
       <article>
        <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h2>
        <p>By <a href="/authors/{{$post->user->username}}">{{$post->user->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>{{$post->body}}</p>
       </article>
       <hr>
   @endforeach
@endsection