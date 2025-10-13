@extends("layout.mainLayout")
@section("title", "Category Detail")
@section('konten')
<div class="container my-5">
    <div class="card shadow border-0 rounded-4 overflow-hidden mb-4">
        <img src="{{ $category->image }}" class="w-100" style="height: 400px; object-fit: cover;" alt="">
        <div class="card-body text-center">
            <h2 class="fw-bold text-black">{{ Str::of($category->nama)->replace('_', ' ')->title() }}</h2>
        </div>
    </div>

    <h3 class="fw-bold text-primary mb-3 text-center">Produk dalam Kategori Ini</h3>
    <div class="row g-4 justify-content-center">
        @forelse ($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow h-100">
                    <img src="{{ $product->image }}" class="card-img-top" alt="foto dari factory" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $product->name }}</h5>
                        <p class="text-muted">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada produk</p>
        @endforelse
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
