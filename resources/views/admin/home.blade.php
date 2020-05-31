@extends('admin.layouts.app')

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
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Advert Slots
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.settings') }}">
                            @csrf
                            <div class="form-group row">
                                @if (isset($settings['hero_banner_ad']))
                                <div class="col-12 mb-3">
                                    <img class="img-fluid" src="{{$settings['hero_banner_ad']}}" />
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="hero_banner_ad" class="col-form-label text-md-right">Hero Banner Slot</label>
                                    <p>Upload the image here (Recommended Resolution 1500x500)</p>
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="hero_banner_ad"
                                        type="file"
                                        class="form-control @error('hero_banner_ad') is-invalid @enderror"
                                        name="hero_banner_ad"
                                        autocomplete="hero_banner_ad"
                                        autofocus
                                    />

                                    @error('hero_banner_ad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr />
                            <div class="form-group row">
                                @if (isset($settings['product_banner_ad']))
                                <div class="col-12 mb-3">
                                    <img class="img-fluid" src="{{$settings['product_banner_ad']}}" />
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="product_banner_ad" class="col-form-label text-md-right">Hero Banner Slot</label>
                                    <p>Upload the image here (Recommended Resolution 1500x500)</p>
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="product_banner_ad"
                                        type="file"
                                        class="form-control @error('product_banner_ad') is-invalid @enderror"
                                        name="product_banner_ad"
                                        autocomplete="product_banner_ad"
                                        autofocus
                                    />

                                    @error('product_banner_ad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        {{"Terms of Use & Privacy Policy"}}
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.settings') }}">
                            @csrf
                            <div class="form-group row">
                                @if (isset($settings['terms_of_use']))
                                <div class="col-12 mb-3">
                                    <a href="{{$settings['terms_of_use']}}">Terms PDF</a>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="terms_of_use" class="col-form-label text-md-right">Terms of use</label>
                                    <p>Upload the file here (Must be PDF Format)</p>
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="terms_of_use"
                                        type="file"
                                        class="form-control @error('terms_of_use') is-invalid @enderror"
                                        name="terms_of_use"
                                        autocomplete="terms_of_use"
                                        autofocus
                                    />

                                    @error('terms_of_use')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                @if (isset($settings['privacy_policy']))
                                <div class="col-12 mb-3">
                                    <a href="{{$settings['privacy_policy']}}">Privacy Policy PDF</a>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="privacy_policy" class="col-form-label text-md-right">Privacy Policy</label>
                                    <p>Upload the file here (Must be PDF Format)</p>
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="privacy_policy"
                                        type="file"
                                        class="form-control @error('privacy_policy') is-invalid @enderror"
                                        name="privacy_policy"
                                        autocomplete="privacy_policy"
                                        autofocus
                                    />

                                    @error('privacy_policy')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
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
