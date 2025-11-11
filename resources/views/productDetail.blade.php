@extends("layout.mainLayout")
@section("title", "Category Detail")
@section('konten')
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <div class="row-md-3 col-sm-6">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="foto dari factory"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">{{ $product->nama }}</h5>
                    <p class="text-muted">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    <p>Deskripsi : {{ $product->deskripsi }}</p>
                    <p>Stock : {{ $product->stock }}</p>
                </div>

            </div>
        </div>
        <div class="text-center mt-4">
            <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>

            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">
                Add to cart
            </a>

            @auth
                @if (Auth::user()->status === 'admin')
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">
                        Edit
                    </a>
                @endif
            @endauth
        </div>
    </div>
@endsection