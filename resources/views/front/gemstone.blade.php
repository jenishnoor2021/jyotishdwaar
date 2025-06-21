@extends('layouts.front')

@section('content')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-12">
                <img src="{{asset('front_assets/img/services/gemstone.jpg')}}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <h2>Gemstone</h2>
                    <p>
                        Gemstone in vedic astrology is truly fascinating. These beautiful stones are believed to hold
                        special energy from the cosmos, and wearing them can potentially influence your life. However,
                        to understand this power and choose the right stone for you, it's best to talk to a gemstone
                        expert, someone who knows all about these stones and their energies.
                    </p>
                    <p>Pandit Subhash Mishra is a gemstone consultant in India who is known for his effective
                        recommendations that show results within . With over 30 years of experience, he has established
                        himself as a trusted advisor, guiding clients to harness the power of gemstones for personal
                        growth, wealth, and success. As a skilled gemologist, Pandit Subhash Mishra tailors his advice
                        to each individual's unique needs, ensuring they receive the most effective guidance for their
                        life path.</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description">
                    <h4>The Science of Gemstones</h4>
                    <ul>
                        <li>The beauty and benefits of gemstones have captivated human attention for years now! Their
                            dazzling colors and their power to alter the cosmic energies have given them a charm that
                            cannot be undermined.
                        </li>
                        <li>Every gemstone has a unique combination of elements, these elements crystallize into
                            intricate geometrical patterns, giving each gemstone its signature characteristics.
                        </li>
                        <li>However, the science of gemstones extends beyond mere aesthetics. Each gemstone carries
                            within its core the power to change our lives. They emit energies that can protect us from
                            harm, keep us away from negative thoughts, align us with our higher self and heal us
                            inside-out.</li>
                        <li>Owing to their mystical nature, the unique properties of gemstones have found myriad
                            applications in modern life. With the help of a learned gemstone consultant in India, you
                            can find the right gemstone for you and get the benefits that come with each gemstone based
                            on your sign.</li>
                        <li>As one of the best gemstone consultants in India, Pandit Subhash Mishra understands the
                            profound impact gemstones can have on our lives. With his expertise in gemstone
                            consultation, he has guided numerous individuals in choosing the right gemstones based on
                            your unique needs and zodiac signs. Experience the transformative power of gemstones and
                            unlock the hidden potential within you by consulting with Pandit Subhash Mishra today.</li>
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
            @include('front_includes.services.astrology')
            @include('front_includes.services.matchmaking')
            @include('front_includes.services.career')
        </div>

    </div>
</section><!-- End Services Section -->

@include('front_includes.custom-marquee')
@endsection