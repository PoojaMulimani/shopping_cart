@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-4" col-md-offset-4>
		<h1>Sign In</h1>
		<form action="{{ route('user.signin')}}" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Sign In</button>
			{{ csrf_field()}}
		</form>
	</div>
</div>

@endsection