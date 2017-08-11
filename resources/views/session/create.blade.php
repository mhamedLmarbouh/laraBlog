@extends('layout')

@section('content')

	<h1>Register</h1>

	<form method="POST" action="/login">
		{{csrf_field()}}

		<div class="form-group">
			<label for="email">Email</label>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">@</span>
			  <input required="true"  type="email" id="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
			</div>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
			  <input required="true"  type="password" id="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
			</div>
		</div>


		<div class="form-group">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>

		@include('partials.errors')

	</form>

@endsection