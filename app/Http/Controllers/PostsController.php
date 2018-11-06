<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(){
      $post = new \App\Post();
      $post->title = request('title');
      $post->content = request('content');
      $post->name = request('name');

      $post->save();

      return redirect('/');
    }

    public function home(){


      $posts = \App\Post::all();

      return view('welcome', compact('posts'));

    }
}
