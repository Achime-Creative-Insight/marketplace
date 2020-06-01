@extends('admin.layouts.app')

@section('content')
<div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h1>
					Add A Category
				</h1>
				<p>
					Add a new category.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form class="form" method="POST" action="{{ route('admin.category.store') }}">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" required placeholder="Enter Name" name="name" id="name">
				</div>
					<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection
