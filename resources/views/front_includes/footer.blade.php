<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
                <h3>Jyotish Dwaar</h3>
                <p>At Jyotish Dwaar, we believe that every soul has a unique journey guided by the stars. Founded by an
                    experienced and compassionate astrologer, Jyotish Dwaar is more than just astrology — it’s a doorway
                    to clarity, peace, and purpose.</p>
                <div class="social-links mt-3">
                    <a href="{{$twitter}}" class="twitter"><i class="ri-twitter-x-fill"></i></a>
                    <a href="{{$facebook}}" class="facebook"><i class="ri-facebook-fill"></i></a>
                    <a href="{{$instagram}}" class="instagram"><i class="ri-instagram-fill"></i></a>
                    <a href="{{$linkdin}}" class="linkedin"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{URL::to('/')}}">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/about')}}">About</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/services')}}">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="{{URL::to('/album')}}">Albums</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/vastu')}}">Vastu</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/gemstone')}}">Gemstone</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/matchmaking')}}">Matchmaking</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/career')}}">Career</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/astrology')}}">Astrology</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                    {{ $company_address }} <br><br>
                    <strong>Phone:</strong> <a href="tel:{{ $company_contact }}">+91 {{ $company_contact }}</a><br>
                    <strong>Email:</strong> {{ $company_email }}<br>
                </p>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>Jyotish Dwaar</span></strong>. All Rights Reserved
    </div>
</div>