@extends('layouts.app')

@section('content')
<div class="jumbotron d-flex align-items-center bg-secondary text-white" id="hero">
	<div class="container">
		<div class="row align-items-md-center">
			<div class="col-md-6 col-12">
				<h1>
					Admin Dashboard
				</h1>
				<p>
					Manage aspects of the project from here.
				</p>
				<a href="{{ route('product.create') }}" class="btn btn-lg btn-primary">List My Products</a>
			</div>
			<div class="col-md-6 col-12">
				<img src="{{asset('images/box.png')}}" style="opacity: 0.6;" alt="Showcase Your Products"
                         class="img-fluid"/>
                </div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
                <h1>Settings</h1>
                <div class="card">
                    <div class="card-header">
                        Featured Video
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.settings') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="featured_video" class="col-md-4 col-form-label text-md-right">Add the ID for the YouTube video here:(Leave blank for no video)</label>

                                <div class="col-md-6">
                                    <input
                                        id="featured_video"
                                        type="text"
                                        class="form-control @error('featured_video') is-invalid @enderror"
                                        name="featured_video"
                                        value="{{ old('featured_video') ? old('featured_video') : ( isset($settings['featured_video']) ? $settings['featured_video'] : "" ) }}"
                                        autocomplete="featured_video"
                                        autofocus
                                    />

                                    @error('featured_video')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

			</div>
		</div>
	</div>
	<section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Top Categories</h2>
                </div>
            </div>
			<div class="row no-gutters">

            </div>
		</div>
	</section>

	@endsection
