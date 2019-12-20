@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        All Categories
                    </h1>
                    <p>
                        View all our categories here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    @foreach($categories as $category)
                        @include('category.partials.list', $category)
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 paginator-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

@endsection
