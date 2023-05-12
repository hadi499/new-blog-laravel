@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="text-center mb-3">{{$title}}</h3>
        @foreach ($posts as $post)
            <article>
             <h4><a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h4>
             <p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
             <p>{{$post->excerpt}}</p>
            </article>
            <hr>
        @endforeach
    </div>
</div>
  
@endsection