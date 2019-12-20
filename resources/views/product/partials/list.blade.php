<div class="col-md-4">
    <div class="card p-2 mb-3">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img">
        <h5>{{$product->name}}</h5>
        <sub class="badge badge-primary">by {{$product->owner->name}}</sub>
        <p>
            {{\Illuminate\Support\Str::limit($product->description, 150, '...')}}
        </p>
        <a href="{{ route('product.show', $product->slug) }}" class="btn-outline-primary btn">Details</a>
    </div>
</div>
