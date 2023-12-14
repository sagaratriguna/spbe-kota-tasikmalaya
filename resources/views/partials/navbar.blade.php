<nav class="navbar navbar-expand-lg navbar-shadow">
    <div class="container">
        <img src="img/{{ $image_1 }}"width="70vh" class="me-3"> 
        <a class="navbar-brand title-navbar row-2" href="/">SIMPAN SPBE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" dat  a-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 column-gap-3">
                <li class="nav-item bg-white rounded">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }} col beranda-navbar" aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item bg-white  rounded ">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} col faq-navbar" href="/about">FAQ</a>
                </li>
                </li>
                <li class="nav-item bg-white rounded" class="dropdown-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }} col informasi-navbar" href="/posts">Informasi</a>
                </li>
                <li class="nav-item bg-white rounded">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} col categories-navbar" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                <button type="submit" class="dropdown-item"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item bg-white rounded login-navbar">
                        <a href="/login" class="nav-link login-navbar" {{ $active === 'login' ? 'active' : '' }}><i 
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- {{-- <ul class="navbar-nav m-sm-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link" {{ $active === 'login' ? 'active' : '' }}>Login</a>
            </li>
        </ul> --}} -->

{{-- <form action="/posts" class="d-flex" role="search">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input class="form-control me-2" type="text" name="search" placeholder="Search.." value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
