@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="text-center ">{{$title}}</h3>
        <div class="row my-3 justify-content-center">
            <div class="col-md-6">
                <form action="/posts">                
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit" >Search</button>
                    </div>                
                </form>
            </div>
        </div>
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