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
//        $posts=Post::all()->sortByDesc('created_at');
        $posts=Post::latest()->get();
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    /**
     * We also can use a wrapper, so we can put Post $post and forget the find method :D
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

        $post=Post::find($id);
        return view('posts.show',compact('post'));
    }

    public function store(){
        /*$post=new Post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');

        $post->save();*/

        $this->validate(\request(),[
            'title'=>'required|max:10',
            'body'=>'required|min:5'
        ]);

        Post::create(request(['title','body']));

        return redirect('/posts');
    }
}
