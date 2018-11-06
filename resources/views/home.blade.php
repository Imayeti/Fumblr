@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center pt-5">Create A New Post</h1>
    <form class="text-center" action="/posts" method="post" >
      {{ csrf_field() }}


      <div class="mb-3">
          <label for="content">Title</label>
        <input class="form-control"  type="text" id="title" name="title" value="" placeholder="">


      </div>
      <div class="field mb-3">
        <label for="content">Content</label>
        <textarea class="form-control textarea" type="text" id="content" name="content"></textarea>

      </div>
    <div class="">
      <button type="submit" class="btn btn-success"name="button">Post!</button>

    </div>
  </form>

  <div class="text-center mt-5">
    <h1 class="mb-3">POSTS</h1>

      @foreach($posts as $post)


        <p class="mb-3"> <span style="font-size: 25px;">{{ $post->title }}</span><a class="ml-5" href="/posts/{{$post->id}}/edit">EDIT</a></p>



      @endforeach
  </div>


</form>





@endsection
