@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h4 class="mt-3">{{$post->title}}</h4>
        <p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>{{$post->body}}</p>
        <a href="/posts">back to posts</a>

    </div>
</div>
   
@endsection