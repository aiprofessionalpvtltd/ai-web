@extends('layouts.frontend.main')

@section('content')

    <!-- Banner Section Three -->
    <section class="banner-section-three">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image: url({{asset('assets/frontend/images/main-slider/header1.jpg')}})">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url({{asset('assets/frontend/images/main-slider/pattern-7.png')}})"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>
                                Transforming the Industry Through<br />
                                Innovative Solutions
                            </h1>
                            <div class="text">
                                We are focused to increase value and growth for clients through synergy of stakeholder’s strengths
                                and capabilities
                            </div>
                            <div class="button-box">
                                <a href="/contact" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url({{asset('assets/frontend/images/main-slider/header2.jpg')}})">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url({{asset('assets/frontend/images/main-slider/pattern-7.png')}})"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>
                                Transforming the Industry Through<br />
                                Innovative Solutions
                            </h1>
                            <div class="text">
                                We are focused to increase value and growth for clients through synergy of stakeholder’s strengths
                                and capabilities
                            </div>
                            <div class="button-box">
                                <a href="/contact" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url({{asset('assets/frontend/images/main-slider/header3.jpg')}})">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url({{asset('assets/frontend/images/main-slider/pattern-7.png')}})"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>
                                Transforming the Industry Through<br />
                                Innovative Solutions
                            </h1>
                            <div class="text">
                                We are focused to increase value and growth for clients through synergy of stakeholder’s strengths
                                and capabilities
                            </div>
                            <div class="button-box">
                                <a href="/contact" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section Two -->

    <!-- Services Section Three -->
    <section class="services-section-three margin-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="service-number">01</div>
                                <h4><a href="services-detail.html">IT Solutions & Services</a></h4>
                                <div class="text">
                                    From IoT and Embedded Systems expertise to specialized employee training, we pave the way for
                                    innovation and efficiency at every stage of your technology journey.
                                </div>
                                <!-- <a href="services-detail.html" class="more-detail">More Detail</a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="service-number">02</div>
                                <h4><a href="services-detail.html">Team Outsourcing Services</a></h4>
                                <div class="text">
                                    We provide team outsourcing services which involves offering businesses the option to hire a team of professionals, often located at client locations to work on specific projects or tasks.
                                </div>
                                <!-- <a href="services-detail.html" class="more-detail">More Detail</a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="service-number">03</div>
                                <h4><a href="services-detail.html">Digital Marketing Services </a></h4>
                                <div class="text">
                                    We will embark on a collaborative journey to discover and empower your business, infusing
                                    innovation into your brand identity within the realms of marketing and advertising.
                                </div>
                                <!-- <a href="services-detail.html" class="more-detail">More Detail</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Three -->

    <!--Sponsors Section-->
    <section class="sponsors-section style-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>
                            Creating Innovative Solutions <br />
                            for your Organization
                        </h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">
                            We develop reliable and scalable software solutions for any OS, browser and device.<br />
                            We bring together deep industry expertise and the latest IT advancements to deliver custom<br />
                            solutions and products that perfectly fit the needs and behavior of their users.
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/1.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/2.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/3.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/4.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/5.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/6.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/7.png')}}" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/8.png')}}" alt="" /></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!-- Content Column -->
            <div class="content-column" style="background-image: url({{asset('assets/frontend/images/background/pattern-13.png')}})">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">About Ai Professionals</div>
                        <h2>
                            Trusted by <br />
                            Happy Customers
                        </h2>
                        <div class="text">
                            At Ai Professionals Private Limited, client satisfaction isn't just a goal; it's our guiding principle. We believe that success is not only measured by results but also by how our clients feel about their experience with us.
                            <br><br>
                            From the moment you engage with us, you become our top priority. We listen attentively to your needs, understand your challenges, and tailor our solutions to exceed your expectations. Your satisfaction is our driving force, and we go above and beyond to ensure that every interaction with us is positive and productive.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image: url({{asset('assets/frontend/images/resource/image-1.jpg')}})">
                <figure class="image-box"><img src="{{asset('assets/frontend/images/resource/image-1.jpg')}}" alt="" /></figure>
            </div>
        </div>
    </section>

    <!-- News Section Three -->
    <section class="news-section-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">OUR SERVICES</div>
                <h2>We Provide Innovative Solutions to Your <br />Business Needs</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/news-5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="#">Application Development </a></h4>
                                <div class="text">
                                    We develop state-of-the-art solutions focusing on your business needs, ensuring a seamless and
                                    enjoyable user experience.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="#">Mobile App Development </a></h4>
                                <div class="text">
                                    Empower your business with our Mobile App Development services, where cutting-edge technology
                                    meets user-friendly design for a truly transformative digital experience.
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/application-development.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/ui-ux.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="#">UI/UX Design </a></h4>
                                <div class="text">
                                    Upgrade user engagement and visual appeal with our UI/UX Design services, where creativity meets
                                    functionality. We are aimed to deliver an exceptional digital experience crafted to your brand's
                                    unique identity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/qa.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="#">QA & Testing </a></h4>
                                <div class="text">
                                    With our QA & Testing services, ensure bug-free functionality, providing a robust foundation for
                                    the reliability and high quality of your digital solutions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="#">IT Consultancy </a></h4>
                                <div class="text">
                                    We provide IT consultancy services to offer innovative solutions, crafted specifically to cater
                                    your needs.
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/it-consultancy.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/dedicated-team.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="#">Dedicated Team </a></h4>
                                <div class="text">
                                    We Provide team outsourcing services which involves offering businesses the option to hire a team
                                    of professionals, often located in client locations, to work on specific projects or tasks.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/digital-marketing.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="#">Digital Marketing </a></h4>
                                <div class="text">
                                    We cater to a comprehensive spectrum of communication, branding, marketing, and research
                                    requirements. Our strategic campaigns, backed by data-driven insights will boost your online
                                    presence and propel your brand to new heights of success.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="#">Robotics</a></h4>
                                <div class="text">
                                    With our cutting-edge technology of Robotic services,we bring your futuristic ideas to life, we
                                    are aimed at setting new standards in automation and intelligent systems.
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/robotics.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="{{asset('assets/frontend/images/resource/embeded-system.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="#">IOT/Embedded System Solutions </a></h4>
                                <div class="text">
                                    We believe in “Driving Innovation with Embedded Technology!” Experience the power of connectivity
                                    and intelligence with our IoT & Embedded Systems services.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section Three -->
@endsection
