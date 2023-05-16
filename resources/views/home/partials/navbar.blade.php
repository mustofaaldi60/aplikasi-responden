<!-- ======= Header ======= -->
<header id="header" class="fixed-top bg-primary">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">{{ env('APP_NAME') }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                @auth
                <li><a class="nav-link scrollto" href="/home">Home</a></li>
                @endauth
                @guest
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                @endguest
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#acara">Acara</a></li>
                <li><a class="nav-link scrollto" href="#siaran">Siaran</a></li>
                <li><a class="nav-link scrollto" href="/g/lagu">Lagu</a></li>
                <li><a class="nav-link scrollto" href="/g/responden/create">Responden</a></li>
                <li><a class="nav-link scrollto" href="/g/request-lagu/create">Request Lagu</a></li>
                @guest
                <li><a class="nav-link scrollto" href="/register">Register</a></li>
                <li><a class="nav-link scrollto" href="/login">Login</a></li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
