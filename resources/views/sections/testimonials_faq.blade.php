@if (!empty($testomonial))
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Our clients speak from the heart...</p>
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
</section>
@endif

@if (!empty($faqs))
<section id="faq" class="faq">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2 style="margin: 0;">Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
            <ul>
                @foreach ($faqs as $key => $faq)
                <li data-aos="fade-up" data-aos-delay="{{ ($key + 1) * 100 }}" class="aos-init aos-animate">
                    <i class="bx bx-help-circle icon-help"></i>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $key }}">
                        {{ $faq->title }}
                        <i class="bx bx-chevron-down icon-show"></i>
                        <i class="bx bx-chevron-up icon-close"></i>
                    </a>
                    <div id="faq-list-{{ $key }}" class="collapse {{ $key == 0 ? 'show' : '' }}"
                        data-bs-parent=".faq-list">
                        <p>{{ $faq->body }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endif
