@extends('welcomelayout')
@section('content')
    <div class="container">
        <section id="banner">
            <img src="{{ asset('image/logo.jpg') }}" class="logo">
            <div class="signup">
                  <a href="admin" class="signupbtn">Admin</a><span> | </span>
                    <a href="signup" class="signupbtn">Log In</a>


            </div>
            <div class="banner-text">
                <h1>Science World</h1>
                <p>Bright your Future With Us</p>
                <div class="banner-btn">
                    <a href="#"><span></span>Find Out</a>
                    <a href="#feature"><span></span>Read more</a>
                </div>
            </div>
        </section>
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#feature">About Us</a></li>
                    <li><a href="#service">Courses</a></li>
                    <li><a href="#testimonial">Library</a></li>
                    <li><a href="#">Blog & Publication</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="{{ asset('image/menu01.png') }}"  id="menu">
        </div>
        <!--features-->

        <section id="feature">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>About Us</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experienced Staff</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="feature-text">
                            <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                        </div>
                    </div>
                    <h1>Booking Online</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="feature-text">
                            <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                        </div>
                    </div>
                    <h1>Affordable Cost</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-inr"></i>
                        </div>
                        <div class="feature-text">
                            <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <img src="{{ asset('image/barber-man.jpg') }}" >
                </div>
            </div>
        </section>

        <!--Service-->

        <section id="service">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provide Better</h1>
            </div>
            <div class="service-box">
                <div class="single-service">
                    <img src="pic-1.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Hair Styling</h3>
                        <hr>
                        <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="pic-2.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Beard Trim</h3>
                        <hr>
                        <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{ asset('image/pic-3.jpg') }}" >
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Hair Cut</h3>
                        <hr>
                        <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{ asset('image/pic-4.jpg') }}" >
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Dry Shampoo</h3>
                        <hr>
                        <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial-->
        <section id="testimonial">
            <div class="title-text">
                <p>TESTIMONIAL</p>
                <h1>What Client Says</h1>
            </div>
            <div class="testimonial-row">
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{ asset('image/img-1.jpg') }}"  >
                        <div class="user-info">
                            <h4>Ken Norman<i class="fa fa-twitter"></i></h4>
                            <small>@kennorman</small>
                        </div>
                    </div>
                    <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{ asset('image/img-2.jpg') }}"  >
                        <div class="user-info">
                            <h4>Liara Karian<i class="fa fa-twitter"></i></h4>
                            <small>@liarakarian</small>
                        </div>
                    </div>
                    <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{ asset('image/img-3.jpg') }}" >
                        <div class="user-info">
                            <h4>Ricky Danial<i class="fa fa-twitter"></i></h4>
                            <small>@rickydanial</small>
                        </div>
                    </div>
                    <p>Agora Pvt.Ltd is an emerging Software Development company based on Jaffna, Sri Lanka.Our intention is Customers Satisfaction by providing innovative and world class solutions with cost effective.</p>
                </div>
            </div>
        </section>

        <!--footer-->
        <section id="footer">
            <img src="{{ asset('image/footer-img.png') }}"  class="footer-img">
            <div class="title-text">
                <p>CONTACT</p>
                <h1>Visit Our Institution</h1>
            </div>
            <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday - 2am to 6pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 6am to 6pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>Jaffna, Sri Lanka<i class="fa fa-map-marker"></i></p>
                <p>scienceworld@gmail.com<i class="fa fa-paper-plane"></i></p>
                <p>+94 776193913<i class="fa fa-phone"></i></p>
            </div>
            </div>

            <div class="social-links">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-youtube"></i>
                <p><b>@ 2021 Agora Solutions PVT(LTD) | All Rights Are Reserved</b></p>
            </div>
        </section>
    </div>
@endsection   
        
    