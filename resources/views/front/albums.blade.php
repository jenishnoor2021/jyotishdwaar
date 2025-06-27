@extends('layouts.front')

@section('content')
<!-- ======= Services Section ======= -->
<section id="albums" class="albums custom-inner-pages section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Albums</h2>
        </div>

        <div class="row gy-4">
            @foreach ($albums as $album)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="albums-item">
                    <img src="{{ $album->file }}" height="100%" width="100%" loading="lazy">
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row mt-4">
            <div class="col-sm-12" style="display:flex;justify-content:center;">
                {{$albums->links('pagination::bootstrap-4')}}
            </div>
        </div>

    </div>
</section><!-- End Services Section -->

@include('front_includes.custom-marquee')
@endsection