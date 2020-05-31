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
			<form class="form" method="POST" action="{{ route('category.store') }}">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" required placeholder="Enter Name" name="name" id="name">
                    </div>
					<div class="form-group">
						<label for="image">Image:</label>
						<!-- <input type="text" class="form-control" required placeholder="Enter Name" name="name" id="name"> -->
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea name="description" id="description" required placeholder="Description"></textarea>
					</div>
					<div class="form-group">
						<label for="price">Price:</label>
						<input type="number" class="form-control" required placeholder="10000" name="price" id="price">
                    </div>
						<div class="form-group">
							<label for="is_physical">Is Physical:</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="is_physical" id="inlineRadio1" checked value=1>
								<label class="form-check-label" for="inlineRadio1">True</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="is_physical" id="inlineRadio2" value=0>
								<label class="form-check-label" for="inlineRadio2">False</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection
