<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset("img/" . $image[0]->source) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">{{ $banner[0]->name }}</a></h1>
            <div class="social-links mt-3 text-center">
                @foreach ($icon as $item)
                <a href="{{ $item->link }}" class="twitter"><i class="{{ $item->source }}"></i></a>
                @endforeach
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                @foreach ($navlink as $item)
                <li><a href="{{ $item->path }}" class="nav-link scrollto active"><i class="{{ $item->icon }}"></i>
                    <span>{{ $item->text }}</span></a></li>
                @endforeach
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
