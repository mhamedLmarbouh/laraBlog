@extends('layout')

@section('content')

	<h1>Create Post</h1>

	<form method="POST" action="/posts">

	 {{ csrf_field() }}

	  <div class="form-group">

	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required="true">
.
	  </div>

	  <div class="form-group">

	    <label for="body">Body</label>
	    <textarea class="form-control"  id="body" placeholder="Body" name="body" required="true" >
	    </textarea>

	  </div>
	  
	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Publish</button>
	  </div>

	  @include('partials.errors')

	</form>



@endsection