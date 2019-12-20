@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="hero">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 col-12">
                    <h1>
                        The easy way to share your products and ideas
                    </h1>
                    <p>
                        Hello! This Project is aimed at solving and show casing the talents especially to the world is
                        it not a lie that
                        we face a lot of limitations. We have to strive harder and help each other by show casing the
                        best we
                        have. AND here we plan to link these talents we have to become better and take them to the right
                        people to listen to their ideas creation key in to it and develop.
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
                <h2>Most Popular Products</h2>
                <div class="row">
                    @foreach($popularProducts as $product)
                        @include('product.partials.list', $product)
                    @endforeach
                </div>
                <div class="row text-center">
                    <a href="{{ route('product.index') }}" class="btn-outline-primary btn">All Products</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row no-gutters">
            @foreach($topCategories as $category)
            <div class="col">
                <div class="card">
                    <div class="card-block">
                        {{ $category->name }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <section id="newsletterCallout" class="bg-grey jumbotron mb-0 d-flex align-items-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <h3>
                        Get new products, great deals, the latest news straight to your inbox!
                    </h3>
                    <form action="{{route('newsletter.signup')}}" method="post"
                          class="form-inline justify-content-center">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email"
                                   placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>
                        Promote your idea or product to the world with our boosted ads!
                    </h3>
                    <a href="/products/promote" class="btn btn-primary btn-lg">Promote my Idea!</a>
                </div>
            </div>
        </div>
    </section>
@endsection
