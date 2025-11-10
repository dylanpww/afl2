@extends("layout.mainLayout")
@section("title", "Homepage | Beranda")
@section('konten')

    <div class="container my-5">
        <h2 class="mb-4 text-center pb-10">All Products</h2>

        <a href="/formAddProduct" class="btn my-10 text-white px-4 py-2"
            style="background-color: #36454F; border-radius: 8px;">
            Add New Product
        </a>


        @foreach ($products as $product)
            <div class="mb-3 border-0 p-3">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex align-items-center">
                        <img src="{{ $product->image }}" alt="{{ $product->nama }}"
                            style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">

                        <div>
                            <h5 class="mb-1 fw-semibold">{{ $product->nama }}</h5>
                            <p class="text-muted mb-1">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            <small class="text-secondary">{{ $product->deskripsi ?? 'No description available.' }}</small>
                        </div>
                    </div>


                    <div class="d-flex gap-2">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                        <form action="{{ route('product.destroy', $product->id) }}" method="POST"
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