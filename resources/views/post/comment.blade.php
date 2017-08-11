<article class="row">

	<!--user image and  name -->
	<div class="col-md-2 col-sm-2 hidden-xs" align="center">
		<figure class="thumbnail">
		  <i class="fa fa-user fa-5x" aria-hidden="true"></i>
		  <figcaption class="text-center">{{auth()->user()->name}}</figcaption>
		</figure>	
	</div>


	<div class="col-md-10 col-sm-10  ">
		<div class="panel panel-default arrow left">
			<div class="panel-body">
			    <!-- Date of the comment -->
			    <header class="text-left bg-faded rounded">
			        <i class="fa fa-clock-o"></i>
			        {{$comment->created_at->diffForHumans()}}
			    </header>
				
				<!-- body of the comment-->
				<div class="comment-post">
					<p>
			            {{$comment->body}}
			        </p>
				</div>

			   	<!-- reply to the comment button-->
			    <p class="text-right">
			    	<a href="#" class="btn btn-default btn-sm">
			    		<i class="fa fa-reply"></i> reply</a>
			   	</p>
			</div>
		</div>
	</div>
</article>
