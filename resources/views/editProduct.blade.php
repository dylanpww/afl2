@extends("layout.mainLayout")
@section("title", "Edit Product")
@section('konten')

<div class="container my-5">
    <h2 class="mb-4 text-center">Edit Product</h2>

    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="nama" class="form-control" value="{{ $product->nama }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="harga" class="form-control" value="{{ $product->harga }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="deskripsi" class="form-control" rows="3">{{ $product->deskripsi }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
        <small class="text-muted">Leave empty to keep current image</small>
        <div class="mt-2">
            <img src="{{ $product->image }}" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
    </div>

    <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
        Update Product
    </button>
</form>

</div>

@endsection
