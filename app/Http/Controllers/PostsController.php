<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(){
      $post = new \App\post();
      $post->title = request('title');
      $post->content = request('content');

      $post->name = \Auth::user()->name;
      $post->user_id = \Auth::user()->id;
      $post->save();

      return redirect('/');
    }

    public function welcome(){

      if(\Auth::check()){
      $posts = \App\post::orderBy('updated_at', 'desc')->get()->where('user_id', \Auth::user()->id)->all();

      // $posts = \DB::table('posts')->where('name', \Auth::user()->name)->first();
      // dd($posts);

      return view('welcome', compact('posts'));
    }else{
      return view('welcome');
    }

    }

    public function edit($id){
      $post = \App\post::findOrFail($id);

      return view('edit', compact('post'));


    }

    public function update(Request $request, $id){
      $post = \App\post::findOrFail($id);
      $post->title = request('title');
      $post->content = request('content');
      $post->name = \Auth::user()->name;


      session()->flash('status', "The post \"<strong>{$post->title}</strong>\" has been updated.");

      $post->save();

      return redirect('/');


    }

    public function destroy($id){
       \App\post::findOrFail($id)->delete();

       return redirect('/home');

    }


}
