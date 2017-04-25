<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id){
        $post=Post::find($id);
        return $post;
    }

    public function store(){
        /*$post=new Post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');

        $post->save();*/

        Post::create(request(['title','body']));

        return redirect('/posts');
    }
}
