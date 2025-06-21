@extends('layouts.front')

@section('content')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-12">
                <img src="{{asset('front_assets/img/services/matchmaking.jpg')}}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <h2>Matchmaking</h2>
                    <p>
                        Matchmaking astrology involves assessing the compatibility and suitability of potential matches
                        based on various factors such as shared interests, values, goals, and personal characteristics.
                    </p>
                    <p>Matchmaking can be done through various means, including traditional methods such as family or
                        community referrals, professional matchmakers, online dating platforms, or algorithm-based
                        dating apps. The goal is to connect individuals who have a higher likelihood of building a
                        successful and fulfilling relationship based on their compatibility and shared interests.</p>
                    <p>The aim of Matchmaking through a famous astrologer in India is to increase the chances of finding
                        a compatible partner or connection by leveraging aspects of zodiac signs, the characteristics
                        based on the birth time, and the expertise of an astrologer.</p>
                    <p>With years of experience in the field, Pandit Subhash Mishra has established himself as an expert
                        in the art of Matchmaking. This extensive experience has endowed him with a wealth of knowledge
                        and proficiency in various aspects of Matchmaking. Pandit Subhash Mishra expertise in astrology,
                        including a deep understanding of birth charts, planetary positions, and astrological
                        principles, plays a pivotal role in his ability to facilitate successful matches.</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <h4>What Is Guna Milan In Match making?</h4>
                    <ul>
                        <li>Guna Milan focuses on comparing the qualities or Gunas of the prospective partners based on
                            their respective birth charts. In Guna Milan, the position of the Moon at the time of birth
                            plays a central role. The Moon represents emotions, feelings, and the mind, and its
                            placement determines the specific qualities or Gunas associated with each individual.</li>
                        <li>There are eight main Gunas considered in the process of Guna Milan. These Gunas include
                            Varna (spiritual compatibility), Vashya (dominance), Tara (compatibility in destiny), Yoni
                            (sexual compatibility), Graha Maitri (mental compatibility), Gana (temperament
                            compatibility), Bhakoot (compatibility related to health and longevity), and Nadi
                            (compatibility related to physical and genetic health).</li>
                        <li>Each Guna is assigned a specific weightage or points, and the total score obtained by
                            comparing the Gunas of the partners is calculated. A higher score indicates better
                            compatibility between the individuals.</li>
                        <li>Matchmaking through the best astrologer in India can provide insights into areas of
                            compatibility, potential challenges, and overall harmony in aspects such as personality,
                            emotional bonding, family life, career, and health.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <h4>✨ Why Choose Jyotish Dwaar?</h4>
                    <p>With years of dedicated experience in Vedic astrology, Jyotish Dwaar approaches each chart with
                        spiritual depth, compassion, and practical wisdom. This isn't just prediction — it's empowered
                        guidance that helps you live with awareness, balance, and trust in your journey.</p>
                    <div class="button">
                        <a class="custom-button mt-4" href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20px" height="20px" viewBox="0 0 15 15" version="1.1">

                                <title>call [#192]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-103.000000, -7321.000000)"
                                        fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M61.7302966,7173.99596 C61.2672966,7175.40296 59.4532966,7176.10496 58.1572966,7175.98796 C56.3872966,7175.82796 54.4612966,7174.88896 52.9992966,7173.85496 C50.8502966,7172.33496 48.8372966,7169.98396 47.6642966,7167.48896 C46.8352966,7165.72596 46.6492966,7163.55796 47.8822966,7161.95096 C48.3382966,7161.35696 48.8312966,7161.03996 49.5722966,7161.00296 C50.6002966,7160.95296 50.7442966,7161.54096 51.0972966,7162.45696 C51.3602966,7163.14196 51.7112966,7163.84096 51.9072966,7164.55096 C52.2742966,7165.87596 50.9912966,7165.93096 50.8292966,7167.01396 C50.7282966,7167.69696 51.5562966,7168.61296 51.9302966,7169.09996 C52.6632966,7170.05396 53.5442966,7170.87696 54.5382966,7171.50296 C55.1072966,7171.86196 56.0262966,7172.50896 56.6782966,7172.15196 C57.6822966,7171.60196 57.5872966,7169.90896 58.9912966,7170.48196 C59.7182966,7170.77796 60.4222966,7171.20496 61.1162966,7171.57896 C62.1892966,7172.15596 62.1392966,7172.75396 61.7302966,7173.99596 C61.4242966,7174.92396 62.0362966,7173.06796 61.7302966,7173.99596"
                                                id="call-[#192]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Talk to Jyotish Dwaar Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section><!-- End Portfolio Details Section -->

<!-- ======= Team Section ======= -->
<section id="astrologers" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Preferred Tarot Readers</h2>

        </div>

        <div class="row">
            @include('front_includes.tarot')
        </div>

    </div>
</section><!-- End Team Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>More Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
            @include('front_includes.services.vastu')
            @include('front_includes.services.gemstone')
            @include('front_includes.services.astrology')
            @include('front_includes.services.career')
        </div>

    </div>
</section><!-- End Services Section -->


@include('front_includes.custom-marquee')
@endsection