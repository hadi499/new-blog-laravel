@extends('layouts.main')

@section('content')
    <h3>{{$post->title}}</h3>
    <p>By Hadi in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{{$post->body}}</p>
@endsection