@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        Your Products
                    </h1>
                    <p>
                        View and Manage all your products here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($product->description, 50, '...') }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
