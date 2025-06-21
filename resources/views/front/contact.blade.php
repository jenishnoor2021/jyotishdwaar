@extends('layouts.front')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="custom-inner-pages contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

            <div class="col-lg-5">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ $company_email }}</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p><a href="tel:{{ $company_contact }}">+91 {{ $company_contact }}</a></p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

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

                <form action="/contactstore" method="post" name="contactForm" class="php-email-form" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" value="{{old('name')}}" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" value="{{old('email')}}" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{old('message')}}</textarea>
                    </div>
                    <div id="form-spinner" style="display: none;" class="text-center mt-3">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Sending...</span>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" id="submitBtn" class="btn btn-primary">Send Message</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@include('front_includes.custom-marquee')
@endsection

@section('page_script')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        const spinner = document.getElementById('form-spinner');

        // Disable button & show spinner
        submitBtn.disabled = true;
        spinner.style.display = 'block';

        // Optionally delay to simulate form processing (remove this on real back-end)
        // setTimeout(() => {
        //     spinner.style.display = 'none';
        //     submitBtn.disabled = false;
        //     document.getElementById('success-msg').style.display = 'block';

        //     // Reset form fields
        //     document.getElementById('contactForm').reset();
        // }, 2000);
    });
</script>
@endsection