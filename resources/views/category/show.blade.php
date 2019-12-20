@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        {{ $category->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    {{ $category->description }}
                </div>
                <div class="row">
                    @foreach($category->products as $product)
                        @include('product.partials.list', $product)
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
