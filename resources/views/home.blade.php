@extends("layout.mainLayout")
@section("title", "Homepage | Beranda")
@section('konten')


    <div class="bg-light"style="height:500px;">
        <img src="https://springbedmewah.com/wp-content/uploads/2022/01/promo-kasur-dreamline-springbed-luxor.jpg" alt=""
            class="w-100 h-100 object-fit-cover" >
    </div>
    <div class="container my-5">
        <section class="mb-5">
            <h2 class="text-center fw-bold mb-4">Keunggulan Kami</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Inovatif</h5>
                            <p class="text-muted mb-0">Kami tidak memiliki ampas karena semua diolah menjadi produk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Solutif</h5>
                            <p class="text-muted mb-0">Kami memiliki berbagai jenis solusi agar kami tidak membuat limbah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body">
                            <h5 class="fw-bold">Cepat Berkembang</h5>
                            <p class="text-muted mb-0">Kami terus belajar dan berusaha mengembangkan produk terbaru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row align-items-center bg-white shadow-sm rounded-4 p-4">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/247763/pexels-photo-247763.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="about us" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 ps-md-4">
                <h2 class="fw-bold mb-3 text-black">Tentang Kami</h2>
                <p class="text-muted mb-4">
                    Kami merupakan sebuah perusahaan bergerak dibidang kasur, kami dapat membuat 300 blok foam setiap bulannya yang dapat dijadikan berbagai macam, seperti kasur, kasur lipat, dll.
                </p>
                <a href="{{ url('/aboutUs') }}" class="btn btn-outline-dark btn-lg">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </section>

    </div>
@endsection