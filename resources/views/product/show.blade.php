@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        {{ $product->name }}
                    </h1>
                    <p>
                        by <b><a href="{{ route('user.show', $product->owner->id) }}">{{ $product->owner->name }}</a></b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid d-block mx-auto" />
                <div>
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>

@endsection
