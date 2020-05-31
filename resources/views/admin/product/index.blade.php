@extends('admin.layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        All Products
                    </h1>
                    <p>
                        View all our products here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    @foreach($products as $product)
                        @include('product.partials.list', $product)
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 paginator-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection
