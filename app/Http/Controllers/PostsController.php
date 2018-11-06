<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(){
      $post = new \App\Post();
      $post->title = request('title');
      $post->content = request('content');

      $post->name = \Auth::user()->name;

      $post->save();

      return redirect('/');
    }

    public function welcome(){


      $posts = \App\Post::orderBy('updated_at', 'desc')->get();

      return view('welcome', compact('posts'));

    }

    public function edit($id){
      $post = \App\Post::find($id);

      return view('edit', compact('post'));


    }

    public function update(Request $request, $id){
      $post = \App\Post::find($id);
      $post->title = request('title');
      $post->content = request('content');
      $post->name = \Auth::user()->name;



      $post->save();

      return redirect('/');




    }


}
