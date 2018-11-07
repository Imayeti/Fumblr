@extends('layouts.app')

@section('content')

<h1 class="text-center pt-5 mb-4">Create A New Post</h1>

    <form class="text-center" action="/posts" method="post" >
      {{ csrf_field() }}


      <div class="mb-2 mt-4">
          <label for="content"><h4>Title</h4></label>
        <input class="form-control mb-4"  type="text" id="title" name="title" value="" placeholder="">


      </div>
      <div class="field pt-1 mb-4">
        <label for="content"><h4>Content</h4></label>
        <textarea class="form-control textarea " type="text" id="content" name="content"></textarea>

      </div>
    <div class="pb-4">
      <button type="submit" class="btn btn-primary "name="button">Post!</button>

    </div>
  </form>
<hr>
  <div class="mx-auto mt-4">
    <h1 class="mb-4 pt-4 text-center">POSTS</h1>







        <table class="table " style="width: 100%;">
          <thead>
            @foreach($posts as $post)

            <tr>
              <th scope="col" style="font-size: 25px;">{{ $post->title }}</th>
              <th scope="col" class="" ><a  class="ml-5" href="/posts/{{$post->id}}/edit">EDIT</a></th>
              <th scope="col" class="text-right" >
                <form class="" action="/posts/{{$post->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="button btn btn-primary">DELETE</button></form>
              </th>

            </tr>
            @endforeach
          </thead>
        </table>




  </div>


</form>





@endsection
