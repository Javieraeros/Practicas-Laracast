@extends('posts.master')
@section('container')
    <div class="col-sm-8 blog-main">

        <h1 class="blog-post-title">{{$post->title}}</h1>

        <p>{{$post->body}}</p>
    </div>
@endsection