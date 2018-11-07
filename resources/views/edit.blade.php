@extends('layouts.app')

@section('content')

<h1 class="text-center pt-5">Edit Post</h1>
    <form class="text-center" action="/posts/{{ $post->id }}" method="post" >
      {{ csrf_field() }}
      {{ method_field('PATCH') }}

    <div class="mb-3">
        <label for="content">Title</label>
      <input class="form-control"  type="text" id="title" name="title" value="{{ $post->title }}" placeholder="" required>


    </div>
    <div class="field mb-3">
      <label for="content">Content</label>
      <textarea class="form-control textarea" type="text" id="content" name="content" required>{{ $post->content }}</textarea>

    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" name="button">Edit Post!</button>

    </div>
  </form>




@endsection
