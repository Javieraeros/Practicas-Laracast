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
        $post=new Post();
        $post=Post::find($id);
        return $post;
    }

    public function store(Request $request){
        $post=new Post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');

        $post->save();

        return redirect('/posts');
    }
}
