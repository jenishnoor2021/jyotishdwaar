<div class="container d-flex align-items-center justify-content-between">

    <!-- Use your image logo -->
    <a href="{{URL::to('/')}}" class="logo">
        <!-- <img src="assets/img/logo.png" alt="" class="img-fluid"> -->
        <h2>JYOTISH DWAAR</h2>
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
            <li><a class="nav-link scrollto {{ Request::is('services') ? 'active' : '' }}" href="{{ url('/services') }}">Services</a></li>
            <li><a class="nav-link scrollto {{ Request::is('album') ? 'active' : '' }}" href="{{ url('/album') }}">Albums</a></li>
            <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>