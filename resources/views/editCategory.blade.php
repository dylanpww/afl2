@extends('layout.mainLayout')
@section('title', 'Edit Category')

@section('konten')

<div class="container my-5">
    <h2 class="mb-4 text-center">Edit Category</h2>

    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <p>jangan ada spasi biar ga error</p>
            <input type="text" name="nama" class="form-control" value="{{ $category->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">

            @if($category->image)
                <div class="mt-2">
                    <img src="{{ $category->image }}" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
            Update Category
        </button>
    </form>
</div>

@endsection
