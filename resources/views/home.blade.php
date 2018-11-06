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

      <div >
        <input type="text" name="name" action=value="" placeholder="Name">

      </div>
    <div >
      <input type="text" name="title" action=value="" placeholder="Title">

    </div>
    <div >
      <input type="text" name="content" action=value="" placeholder="Content">

    </div>
    <div class="">
      <button type="submit" name="button">Post!</button>

    </div>
  </form>


</form>





@endsection
