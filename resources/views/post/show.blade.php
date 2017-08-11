@extends('layout')

@section('content')

        @include('post.post')

        <hr>


        @foreach($post->comments as $comment)

	    	@include('post.comment')    

		@endforeach
        
        <hr>

		<div class="card">

			<div class="card-block">
				
					<form method="POST" action="/posts/{{$post->id}}/comment">


						{{csrf_field()}}
						<div class="form-group">
							<textarea id="body" placeholder="Your Comment"  class="form-control" name="body" required="true"></textarea> 
						</div>

						<div class="form-group">

							<input type="submit" class="btn btn-primary" value="Add comment">
							</input>

						</div>

						@include('partials.errors')

					</form>
				
			</div>

		</div>

        
@endsection