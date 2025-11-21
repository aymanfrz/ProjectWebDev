<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href=""><img src="{{ asset('images/logomicro.png') }}"></strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Our Products</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (auth()->user()->status == 'admin')
                            <a class="nav-link" href="/admin">Admin</a>
                        @endif
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn" type="submit">Log Out</button>
                        </form>
                    @endauth
                    @guest
                        <a class="nav-link" href="/login">Log In</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
