@extends('layouts.main')

@section('content')
    <h3>{{$post->title}}</h3>
    <p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{{$post->body}}</p>
@endsection