@extends('layouts.front')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="custom-inner-pages about">
        <div class="container">

            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
                    <img src="{{ asset('front_assets/img/about.png') }}" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">About Us</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Astrology is like a roadmap. It doesn't steer your life but highlights the journey ahead by
                        revealing potential turns and bumps. As you adjust your route based on it to avoid accidents,
                        following astrological insights allows you to live a life with confidence and grace. In this
                        journey, an expert astrologer like Pandit Subhash Mishra can be a supportive guide in choosing the
                        right path. As a top astrologer in Gurgaon, a gemstone consultant, and a Vastu Expert, Pt. Kaushik
                        offers a path to success and stability through his deep understanding of Vedic astrology, gemstone
                        consultancy, and Vastu Shastra. With over 30 years of experience and a client list featuring
                        celebrities and top industrialists, his accurate predictions and effective solutions have
                        established him as a leading authority in the field.
                    </p>
                    <p>
                        Pandit Subhash Mishra not only offers insightful astrological guidance but also provides practical
                        Vastu remedies to create a positive and harmonious environment in your home, business, and political
                        spaces with his expertise in Commercial Vastu and Political Vastu. His deep understanding of
                        gemstones has helped many find stability and hope in their careers, relationships, and overall
                        well-being. As a certified gemstone consultant, his popularity and credibility can be measured by
                        the level of respect he gets from his admirers.
                    </p>
                    <!-- <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                              <i class="bx bx-receipt"></i>
                              <h4>Guidance:</h4>
                              <ul>
                                <li>🌟 Personalized Life Path Guidance based on your birth chart</li>
                                <li>💼 Decision-making support for career, business & finance</li>
                                <li>💖 Emotional & Relationship clarity through planetary insights</li>
                                <li>🧘 Spiritual alignment and mental peace through astrological wisdom</li>
                                <li>🕰️ Right timing (Muhurat) for important life events</li>
                                <li>🔄 Remedies and rituals to reduce the impact of malefic planets</li>
                              </ul>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                              <i class="bx bx-cube-alt"></i>
                              <h4>Speciality:</h4>
                              <ul>
                                <li>🔮 Vedic Astrology (જ્યોતિષ શાસ્ત્ર)</li>
                                <li>💑 Kundli Matching & Relationship Guidance</li>
                                <li>🏠 Vastu Consultation for Home & Business</li>
                                <li>🕉️ Spiritual Remedies (Mantra, Yantra, Gemstone Suggestions)</li>
                                <li>📅 Muhurat Selection for Marriage, Property, Travel & More</li>
                                <li>🪔 Personalized Life Predictions & Career Guidance</li>
                              </ul>
                            </div>
                          </div> -->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
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

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p>Ready to bring clarity, peace, and purpose into your life? Let Jyotish Dwaar guide you through the
                        power of astrology. Whether you’re seeking answers or direction, our personalized sessions are here
                        to illuminate your path.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
                            height="20px" viewBox="0 0 15 15" version="1.1">

                            <title>call [#192]</title>
                            <desc>Created with Sketch.</desc>
                            <defs>

                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-103.000000, -7321.000000)"
                                    fill="#fff">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M61.7302966,7173.99596 C61.2672966,7175.40296 59.4532966,7176.10496 58.1572966,7175.98796 C56.3872966,7175.82796 54.4612966,7174.88896 52.9992966,7173.85496 C50.8502966,7172.33496 48.8372966,7169.98396 47.6642966,7167.48896 C46.8352966,7165.72596 46.6492966,7163.55796 47.8822966,7161.95096 C48.3382966,7161.35696 48.8312966,7161.03996 49.5722966,7161.00296 C50.6002966,7160.95296 50.7442966,7161.54096 51.0972966,7162.45696 C51.3602966,7163.14196 51.7112966,7163.84096 51.9072966,7164.55096 C52.2742966,7165.87596 50.9912966,7165.93096 50.8292966,7167.01396 C50.7282966,7167.69696 51.5562966,7168.61296 51.9302966,7169.09996 C52.6632966,7170.05396 53.5442966,7170.87696 54.5382966,7171.50296 C55.1072966,7171.86196 56.0262966,7172.50896 56.6782966,7172.15196 C57.6822966,7171.60196 57.5872966,7169.90896 58.9912966,7170.48196 C59.7182966,7170.77796 60.4222966,7171.20496 61.1162966,7171.57896 C62.1892966,7172.15596 62.1392966,7172.75396 61.7302966,7173.99596 C61.4242966,7174.92396 62.0362966,7173.06796 61.7302966,7173.99596"
                                            id="call-[#192]">

                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Call Us
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    @include('front_includes.custom-marquee')
@endsection
