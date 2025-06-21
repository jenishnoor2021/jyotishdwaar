@extends('layouts.front')

@section('content')
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg custom-inner-pages">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
            @include('front_includes.services.vastu')
            @include('front_includes.services.gemstone')
            @include('front_includes.services.matchmaking')
            @include('front_includes.services.career')
            @include('front_includes.services.astrology')
        </div>

    </div>
</section><!-- End Services Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services services2">
    @include('front_includes.service2')
</section><!-- End Services Section -->

@include('front_includes.custom-marquee')
@endsection