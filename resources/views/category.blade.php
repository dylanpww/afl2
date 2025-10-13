@extends("layout.mainLayout")
@section("title", "Category")
@section('konten')

    <div class="position-relative" style="height: 500px; overflow: hidden;">
        <img src="https://asset.kompas.com/crops/twer5yskftOmXib_ihMocIti2NQ=/0x0:0x0/1200x800/data/photo/2021/05/05/6092ae3f3157d.jpg"
            alt="" class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; opacity: 0.5;">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-black">
            <h1 class="fw-bold display-4">Kategori Produk Kami</h1>
            <p class="lead">Berikut adalah kategori produk yang kami miliki</p>
        </div>
    </div>

    <div class="container my-5 text-center">
        <div class="row g-4 justify-content-center">
            <h2>CATEGORIES</h2>
            @foreach ($categories as $category)
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <img src="{{$category->image}}" class="card-img-top rounded-top-4"
                            alt="{{ $category->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-black">{{ Str::of($category->nama)->replace('_', ' ')->title() }}</h5>
                            <a href="{{ route('category.show', $category->id) }}" class="btn btn-category text-white mt-2">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <H2>PRODUCTS</H2>
          @forelse ($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow h-100">
                    <img src="{{ $product->image }}" class="card-img-top" alt="" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5>{{ $product->nama }}</h5>
                        <p class="text-muted">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada produk</p>
        @endforelse 
        </div>
    </div>

    <style>
.btn-category{
    background-color: #A9A9A9;
  color: white;
  border: none;
}

.btn-category:hover{
    background-color: #36454F;
}
    </style>

@endsection