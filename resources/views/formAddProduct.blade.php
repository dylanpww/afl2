@extends("layout.mainLayout")
@section("title", "Add New Product")

@section("konten")
    <div class="container my-5">
        <h2 class="mb-4 text-center">Add New Product</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Product Name --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Product Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter product name" required>
            </div>

            {{-- Price --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Price</label>
                <input type="number" name="harga" class="form-control" placeholder="Enter price" min="0" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Stock</label>
                <input type="number" name="stock" class="form-control" placeholder="Enter stock" min="0" required>
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="deskripsi" class="form-control" rows="3"
                    placeholder="Enter product description (optional)"></textarea>
            </div>

            {{-- Category --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Category</label>
                <select name="category_id" class="form-select" required>
                    <option value="" disabled selected>-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Product Image --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Product Image</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
                Add Product
            </button>
        </form>
    </div>
@endsection