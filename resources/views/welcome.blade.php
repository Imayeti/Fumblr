@extends('layouts.app')

@section('content')

    <h1 class="text-center mb-5 mt-3">All The Fumbls</h1>


    @foreach($posts as $post)
      <!-- <li>{{ $post->title }}</li>
      <li>{{ $post->name }}</li>
      <li>{{ $post->content }}</li> -->

    <div class="card mx-auto mb-5 col-7" >
      <div class="card-body">
        <h5 class="card-title text-center">{{ $post->title  }}</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">By: {{ $post->name }}</h6>
        <p class="card-text text-center">{{ $post->content }}</p>

      </div>
    </div>


    @endforeach



@endsection
