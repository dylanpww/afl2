<nav class="navbar navbar-expand-lg navbar-dark shadow-sm "
    style="background: linear-gradient(90deg, #36454F, #A9A9A9);">
    <div class="container py-2">
        <a class="navbar-brand fw-bold text-white fs-4" href="/">
            SADYL
        </a>
        {{-- buat resposive hp --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-white fw-semibold position-relative">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-2 ">
                    <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="/category">
                        Product
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('aboutUs') ? 'active' : '' }}" href="/aboutUs">
                        About Us
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ Request::is('aboutUs') ? 'active' : '' }}" href="/cart">
                        View Cart
                    </a>
                </li>
                <li class="nav-item mx-2">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn">Log Out</button>
                        </form>
                    @endauth
                    @guest
                        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">
                            Login
                        </a>
                    @endguest

                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-link {
        transition: color 0.3s, transform 0.2s;
    }

    .navbar-nav .nav-link:hover {
        color: #36454F !important;
        transform: translateY(-2px);
    }

    .navbar-brand {
        transition: transform 0.3s;
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }
</style>