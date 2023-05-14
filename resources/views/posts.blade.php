@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="text-center mb-4">{{$title}}</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/posts" >                
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit" >Search</button>
                    </div>            
                </form>
            </div>
        </div>

        @if ($posts->count())
            @foreach ($posts as $post)
                <article>
                <h4><a href="/posts/{{$post->slug}}">{{$post->title}}</a> </h4>
                <p>By <a href="/posts?author={{ $post->author->username }}">{{$post->author->name}}</a> in  <a href="/posts?category={{ $post->category->slug }}">{{$post->category->name}}</a></p>
                <p>{{$post->excerpt}}</p>
                </article>
                <hr>
            @endforeach
        @else
            <p class="text-center fs-4">no post found.</p>
        @endif
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
  
@endsection