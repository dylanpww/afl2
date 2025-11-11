@extends("layout.mainLayout")
@section("title", "Add New Product")

@section("konten")
    <div class="container my-5">
        <h2 class="mb-4 text-center">Add New Category</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

        
            <div class="mb-3">
                <label class="form-label fw-semibold">Category Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter category name" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Category Image</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            
            <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
                Add Category
            </button>
        </form>
    </div>
@endsection