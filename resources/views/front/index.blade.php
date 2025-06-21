@extends('layouts.front')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="particles-js">
        <canvas class="particles-js-canvas-el" width="1343" height="630" style="width: 100%; height: 100%;"></canvas>
    </div>


    <div class="container zi">
        <div class="row">
            <div class="col-lg-7 pt-lg-0 order-2 order-lg-1">
                <h1>🌠 Illuminate Your Life Path with Jyotish Dwaar</h1>
                <p>With years of experience in Vedic astrology, Jyotish Dwaar offers accurate predictions, kundli
                    analysis, and life-changing guidance tailored to your birth chart.</p>
                <a href="javascript:void()" class="btn-chat-started" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"> Whatsapp Us </a>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img">
                <img src="{{ asset('front_assets/img/banner.png') }}" width="420" height="420"
                    class="img-fluid spin" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </use>
        </g>
    </svg>

</section>
<!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 d-flex align-items-center justify-content-center about-img">
                <img src="{{ asset('front_assets/img/about.png') }}" class="img-fluid" alt=""
                    data-aos="zoom-in">
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
                <div class="button">
                    <!-- <a class="custom-button mt-4 filled-bg" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                About Us
                                                            </a> -->
                    <a class="custom-button mt-4 filled-bg" href="{{ URL::to('/about') }}">
                        About Us
                    </a>
                </div>
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

<!-- ======= Services Section ======= -->
<section id="services" class="services services2">
    @include('front_includes.service2')
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
                <a class="cta-btn align-middle" href="tel:{{ $company_contact }}" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
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

<section class="hourse_in_kundli pt-5">
    <div class="container">
        <div class="section-title">
            <h2 style="margin: 0;">Houses In Kundali And Their Effects</h2>
        </div>

        <div class="kundli_house_table_wrap overflow-hidden">
            <div class="table-responsive">
                <table class="w-100 table-responsive kundli_house_table table table-striped">
                    <thead>
                        <tr>
                            <th width="300">House</th>
                            <th width="200">Ruling Sign</th>
                            <th>Life Prospect</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1st House in Kundli</td>
                            <td><span>Aries</span></td>
                            <td>Nature, appearance, temperament, ego, new facades<br> and your perspective towards life.
                            </td>
                        </tr>
                        <tr>
                            <td>2nd House in Kundli</td>
                            <td><span>Taurus</span></td>
                            <td>Finance, heritage, eating habits.</td>
                        </tr>
                        <tr>
                            <td>3rd House in Kundli</td>
                            <td><span>Gemini</span></td>
                            <td>Communication, thinking, younger siblings, bravery.</td>
                        </tr>
                        <tr>
                            <td>4th House in Kundli</td>
                            <td><span>Cancer</span></td>
                            <td>Home background, parents, particularly mother, the influence of a
                                mother in early days of childhood, amenities, materialistic things</td>
                        </tr>
                        <tr>
                            <td>5th House in Kundli</td>
                            <td><span>Leo</span></td>
                            <td>It controls your self-expression, education, children, and karma of past life.</td>
                        </tr>
                        <tr>
                            <td>6th House in Kundli</td>
                            <td><span>Vigro</span></td>
                            <td>It represents fitness, health problems, hygiene, and your service to others,
                                including animals, obligation, and enemy.</td>
                        </tr>
                        <tr>
                            <td>7th House in Kundli</td>
                            <td><span>Libra</span></td>
                            <td>It handles business associations, deals, contracts, marriage, and life partners.</td>
                        </tr>
                        <tr>
                            <td>8th House in Kundli</td>
                            <td><span>Scorpio</span></td>
                            <td>Deals with death and reincarnation.</td>
                        </tr>
                        <tr>
                            <td>9th House in Kundli</td>
                            <td><span>Sagittarius</span></td>
                            <td>The development of your mind, horizons, and luck.</td>
                        </tr>
                        <tr>
                            <td>10th House in Kundli</td>
                            <td><span>Capricorn</span></td>
                            <td>Symbolises your father and how he has impacted you throughout your
                                childhood and work.</td>
                        </tr>
                        <tr>
                            <td>11th House in Kundli</td>
                            <td><span>Aquarius</span></td>
                            <td>Represents your roles as a husband, partner, wife, friend or businessman and
                                shows your relationship with your elder siblings.</td>
                        </tr>
                        <tr>
                            <td>12th House in Kundli</td>
                            <td><span>Pisces</span></td>
                            <td>Issues related to the psyche, lockups, and hospitals represent custody towards
                                the unknown, foreign travel and losses.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Our clients speak from the heart. From life-changing insights to accurate predictions, Jyotish Dwaar has
                helped countless individuals find clarity and peace. Hear from those who have experienced the guidance
                and wisdom first-hand.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($testomonial as $test)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $test->message }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <h3>{{ $test->name }}</h3>
                        <h4>{{ $test->occupation }}</h4>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

<section id="faq" class="faq">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
            <h2 style="margin: 0;">Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
            <ul>
                @foreach ($faqs as $key => $faq)
                @php
                $delay = 100;
                @endphp
                <li data-aos="fade-up" data-aos-delay="{{ $delay }}" class="aos-init aos-animate">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-{{ $key }}">{{ $faq->title }} <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-{{ $key }}" class="collapse {{ $key == 0 ? 'show' : '' }}"
                        data-bs-parent=".faq-list">
                        <p>{{ $faq->body }}</p>
                    </div>
                </li>
                @php
                $delay += 100;
                @endphp
                @endforeach

            </ul>
        </div>

    </div>
</section>

@include('front_includes.custom-marquee')
@endsection

@section('page_script')
<script src="{{ asset('front_assets/js/particles.js') }}"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 100,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
@endsection