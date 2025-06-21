<!DOCTYPE html>
<html lang="en">

<head>
    @include('front_includes.head')

    @yield('page_style')
</head>

<body>

    @php
    $isHomePage = Request::is('/') || Request::is('home');
    @endphp

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center {{ !$isHomePage ? 'topbar-inner-pages' : '' }}">
        @include('front_includes.topbar')
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center {{ !$isHomePage ? 'header-inner-pages' : '' }}">
        @include('front_includes.header')
    </header>


    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <main id="main">
        @yield('content')
    </main>
    <!-- end main content-->

    <!-- model -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Consultation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/inquirystore" method="post" name="inquirystore" class="php-email-form" id="inquirystore">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}" required>
                        </div>

                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="contact" placeholder="Your Contact Number" value="{{old('contact')}}" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="custom-button" id="inquirysubmitBtn">
                            Submit
                            <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true" id="formSpinner"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer id="footer">
        @include('front_includes.footer')
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front_assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front_assets/js/main.js') }}"></script>

    @yield('page_script')

    <script>
        document.getElementById('inquirystore').addEventListener('submit', function() {
            var submitBtn = document.getElementById('inquirysubmitBtn');
            var spinner = document.getElementById('formSpinner');

            // Disable the button to prevent multiple clicks
            submitBtn.disabled = true;

            // Show the spinner
            spinner.classList.remove('d-none');
        });
    </script>

</body>

</html>