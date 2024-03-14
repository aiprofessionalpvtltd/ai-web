@extends('layouts.frontend.main')

@section('content')

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one"
             style="background-image: url({{asset('assets/frontend/images/background/pattern-16.png')}})"></div>
        <div class="auto-container">
            <h2>About us</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">ABOUT US</div>
                <h2>
                    You Cannot Use Up <br/>
                    Creativity.
                </h2>
            </div>
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            Ai Professionals is committed to offer its services in the Information Technology Industry.
                            We
                            endeavor to provide top-notch services to accomplish client’s needs. We believe in
                            collaboration and
                            innovation in various fields to establish long term relationships with our clients.
                        </div>
                        <div class="blocks-outer">
                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <i class="fas fa-glasses"></i>
                                    <div class="icon flaticon-award-1"></div>
                                    <h6>Vision</h6>
                                    <div class="feature-text">To create value through innovative solutions.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-technical-support"></div>
                                    <h6>Mission</h6>
                                    <div class="feature-text">
                                        We are focused to increase value and growth for clients through synergy of
                                        stakeholder’s
                                        strengths and capabilities.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column"
                         style="background-image: url({{asset('assets/frontend/images/icons/globe.png')}})">
                        <div class="pattern-layer"
                             style="background-image: url({{asset('assets/frontend/images/background/pattern-1.png')}})"></div>
                        <div class="images-outer parallax-scene-1">
                            <div class="image" data-depth="0.10">
                                <img src="{{asset('assets/frontend/images/resource/about-1.jpg')}}" alt=""/>
                            </div>
                            <div class="image-two" data-depth="0.30">
                                <img src="{{asset('assets/frontend/images/resource/about-2.jpg')}}" alt=""/>
                            </div>
                            <div class="image-three" data-depth="0.20">
                                <img src="{{asset('assets/frontend/images/resource/about-3.jpg')}}" alt=""/>
                            </div>
                            <div class="image-four" data-depth="0.30">
                                <img src="{{asset('assets/frontend/images/resource/about-4.jpg')}}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="9">0</span>+
                                    </div>
                                    <h4 class="counter-title">Experience</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Column -->
                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="5000" data-stop="50">0</span>+
                                    </div>
                                    <h4 class="counter-title">Projects Completed</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Column -->
                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="30">0</span>+
                                    </div>
                                    <h4 class="counter-title">IT Trainings</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <!-- About Section Two -->
    <section class="about-section-two"
             style="background-image: url({{asset('assets/frontend/images/background/3.jpg')}})">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer"
                             style="background-image: url({{asset('assets/frontend/images/background/pattern-10.png')}})"></div>
                        <div class="image">
                            <img src="{{asset('assets/frontend/images/resource/about-5.jpg')}}" alt=""/>
                        </div>
                    </div>
                </div>

                <!-- Skill Column -->
                <div class="skill-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>Transform Your Business With The Leading IT Solution Provider.</h2>
                            <div class="text">
                                We develop reliable and scalable software solutions for any OS, browser and device.We
                                bring together
                                deep industry expertise and the latest IT advancements to deliver custom solutions and
                                products that
                                perfectly fit the needs and behavior of their users.
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="skills">
                            <!-- Skill Item -->


                            <a href="/contact" class="theme-btn btn-style-two"><span
                                    class="txt">Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section Two -->

    <!--Sponsors Section-->
    <section class="sponsors-section style-two">
        <div class="auto-container">
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/1.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/2.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/3.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/4.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/1.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/2.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/3.png')}}" alt=""/></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/clients/4.png')}}" alt=""/></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Process Section -->
    <section class="process-section">
        <div class="pattern-layer-one"
             style="background-image: url({{asset('assets/frontend/images/background/pattern-11.jpg')}})"></div>
        <div class="pattern-layer-two"
             style="background-image: url({{asset('assets/frontend/images/background/pattern-12.jpg')}})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">OUR PROCESS</div>
                <h2>Achieving Client Success Through <br/>Innovative Perspectives</h2>
            </div>
            <div class="row clearfix">
                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">01</div>
                        <h4><a href="services-detail.html">Requirement Analysis</a></h4>
                        <div class="text">
                            We engage with the client to understand their specific needs, goals, and challenges and
                            conduct a
                            thorough analysis of the client's business processes and existing technology infrastructure.
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">02</div>
                        <h4><a href="services-detail.html">Solution Design and Development </a></h4>
                        <div class="text">
                            Based on the gathered requirements we develop a comprehensive solution design and Implement
                            the
                            solution using the appropriate technologies and methodologies.
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">03</div>
                        <h4><a href="services-detail.html">Implementation and Support </a></h4>
                        <div class="text">
                            After deploying the solution we provide necessary staff training to the end users by
                            ensuring
                            proper utilization of the developed solution. From maintenance to support, we got you
                            covered.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Process Section -->

    <!-- Experiance Section -->
    <section class="experiance-section"
             style="background-image: url({{asset('assets/frontend/images/background/pattern-9.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">EXPERIENCE. EXECUTION. EXCELLENCE.</div>
                <h2>What We Actually Do</h2>
            </div>

            <!-- Experiance Info Tabs -->
            <div class="experiance-info-tabs">
                <!-- Experiance Tabs -->
                <div class="experiance-tabs tabs-box">
                    <!-- Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn"><i class="fab fa-python"></i> Python</li>
                        <li class="tab-btn">
                            <i class="fab fa-react"></i>React
                        </li>
                        <li class="tab-btn"><i class="fab fa-angular"></i> Angular</li>
                        <li class="tab-btn"><i class="fab fa-node-js"></i>Node</li>
                        <li class="tab-btn"><i class="fab fa-java"></i>Java</li>
                        <li class="tab-btn"><i class="fab fa-apple"></i>IOS</li>
                        <li class="tab-btn"><i class="fab fa-android"></i>Android</li>
                        <li class="tab-btn"><i class="fab fa-php"></i> Php</li>
                        <li class="tab-btn"><i class="fab fa-js"></i>Javascript</li>
                    </ul>


                </div>
            </div>
        </div>
    </section>
    <!-- End Experiance Section -->
@endsection
