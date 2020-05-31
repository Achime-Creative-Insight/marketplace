<div class="col-md-4">
    <div class="card p-2 mb-3">
        <h5>{{$category->name}}</h5>
        <p>
            {{\Illuminate\Support\Str::limit($category->description, 150, '...')}}
        </p>
        <a href="{{ route('category.show', $category->slug) }}" class="btn-outline-primary btn">View Products</a>
    </div>
</div>
