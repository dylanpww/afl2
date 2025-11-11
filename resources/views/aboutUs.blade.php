@extends("layout.mainLayout")
@section("title", "Tentang Kami")

@section('konten')
    <div class="container my-5">
        <section class="text-center mb-5">
            <h1 class="fw-bold text-black mb-3">About Us</h1>
            <p class="text-muted fs-5">
                Kami merupakan sebuah team yang solid yang membuat 300 blok spon per bulannya, dengan ini kami merupakan top supplier di bali.
            </p>
        </section>
        <section class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""
                    class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-md-6 ps-md-4">
                <h3 class="fw-bold text-black mb-3">Siapa Kami?</h3>
                <p>
                    Kami adalah sebuah perusahaan yang bergerak dibidang kasur, baik dari foam bed maupun spring bed. kami sudah berpengalaman selama 30 tahun terakhir dan kami sudah memasokkan kasur kami ke seluruh penjuru, mulai dari rumah warga, hotel, apartemen, dan lain lain.
                </p>
                <p>
                    Jangan segan segan untuk menanyakan apapun ke kami, hubungi kami di nomor atau email yang tertera dibawah
                </p>
            </div>
        </section>
        <section class="text-center">
        <h2 class="fw-bold mb-4 text-black">Review Pelanggan</h2>
        <a href="{{ route('rating.create') }}" class="btn btn-primary mb-4">Add Review</a>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @forelse ($ratings as $rating)
                <div class="card border-0 shadow rounded-4 p-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="mb-2">
                            @for ($i = 0; $i < $rating->star; $i++)
                                ⭐
                            @endfor
                        </div>
                        <p class="text-muted mb-0">{{ $rating->comment }}</p>
                    </div>
                </div>
            @empty
                <p class="text-muted">Belum ada ulasan pelanggan.</p>
            @endforelse
        </div>
    </section>
@endsection