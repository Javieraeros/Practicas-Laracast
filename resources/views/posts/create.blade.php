@extends('posts.master')

@section('container')
    <div class="col-sm-8 blog-main">

        <h1>Create a New fresh Post</h1>
        <hr>
        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('posts.errors')
        </form>

    </div>
@endsection
