<?php

use App\Models\Tarot;

$tarots = Tarot::where('is_active', 1)->get();
?>

@foreach ($tarots as $tarot)
<div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
    <div class="member d-flex align-items-start">
        <div class="pic"><img src="{{ $tarot->file }}" class="img-fluid" alt="">
        </div>
        <div class="member-info">
            <h4>{{ $tarot->name }}</h4>
            <span>{{ $tarot->occupation }}</span>
            <div class="social">
                <a href="{{ $tarot->twitter }}"><i class="ri-twitter-x-fill"></i></a>
                <a href="{{ $tarot->facebook }}"><i class="ri-facebook-fill"></i></a>
                <a href="{{ $tarot->instagram }}"><i class="ri-instagram-fill"></i></a>
                <a href="{{ $tarot->linkedin }}"> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
            <p>{{ $tarot->message }}</p>

            <button class="custom-button mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"> Book
                Consultation </button>
        </div>
    </div>
</div>
@endforeach