@extends("layout.mainLayout")
@section("title", "Homepage | Categories")
@section('konten')

<div class="container my-5">
    <h2 class="mb-4 text-center pb-10">All Categories</h2>

    <a href="/formAddCategory" class="btn my-10 text-white px-4 py-2"
        style="background-color: #36454F; border-radius: 8px;">
        Add New Category
    </a>

    @foreach ($categories as $category)
        <div class="mb-3 border-0 p-3">
            <div class="d-flex justify-content-between align-items-center">

                <div class="d-flex align-items-center">
                    @if($category->image)
                        <img src="{{ $category->image }}" alt="{{ $category->nama }}"
                            style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">
                    @else
                        <div style="width:100px; height:100px; background:#f0f0f0; margin-right:15px; display:flex; align-items:center; justify-content:center;">
                            No Image
                        </div>
                    @endif

                    <div>
                        <h5 class="mb-1 fw-semibold">{{ $category->nama }}</h5>
                        <small class="text-secondary">
                            {{ $category->products->count() ?? 0 }} products
                        </small>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="my-3">
    @endforeach

</div>

@endsection
