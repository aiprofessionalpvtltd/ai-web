@extends('layouts.frontend.main')

@section('content')



    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one"
             style="background-image: url({{asset('assets/frontend/images/background/pattern-16.png')}})"></div>
        <div class="auto-container">
            <h2>Contact us</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box">
                <div class="title">GET IN TOUCH</div>
                <h2>Contact Us</h2>
                <div class="text">For genereal enquires you can touch with our front desk supporting team at</div>
            </div>

            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>211, First Floor, Park Avenue, F-11/1, Islambad</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>Phone</strong></li>
                                <li>00923335465228</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-email-1"></span></div>
                            <ul>
                                <li><strong>E-Mail</strong></li>
                                <li>info@aiprofessionals.co</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe
                        src="https://maps.google.com/maps?q=211,%20First%20Floor,%20Park%20Avenue,%20F-11/1,%20Islambad&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                        allowfullscreen=""
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">SEND YOUR MESSAGE</div>
                        <h2>Send Your Message</h2>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div id="contact-form-container" class="contact-form">

                <div class="alert d-none" id="form-messages" role="alert">
                    <span class="internal-text"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Contact Form -->
                <form method="post" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Your name *</label>
                            <input type="text" name="name" placeholder="" required/>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Email address *</label>
                            <input type="text" name="email" placeholder="" required/>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Phone number *</label>
                            <input type="text" name="phone" placeholder="" required/>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Website</label>
                            <input type="text" name="website" placeholder=""/>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label>Your Message *</label>
                            <textarea name="message" placeholder=""></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-three send-btn" type="submit" name="submit-form">
                                <span class="txt send-btn-txt">Send Now</span>
                            </button>

                        </div>
                    </div>

                </form>

            </div>
            <!-- End Contact Form -->
        </div>
    </section>
    <!-- End Contact Map Section -->
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('#contact-form').on('submit', function (e) {
                e.preventDefault();

                console.log('click')
                // Change button text to indicate sending
                $('.send-btn-txt').text('Sending...');

                // Disable the button to prevent multiple submissions
                $('.send-btn').prop('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: '{{ route("contact.store") }}', // Replace with your route
                    data: $(this).serialize(),
                    success: function (response) {
                        $('.send-btn-txt').text('Send Now');
                        $('.send-btn').prop('disabled', false);
                        $('#form-messages').removeClass('d-none').removeClass('alert-danger').addClass('alert-success');
                        $('.internal-text').text(response.message);
                    },
                    error: function (xhr, status, error) {
                        $('.send-btn-txt').text('Send Now');
                        $('.send-btn').prop('disabled', false);

                        var response = JSON.parse(xhr.responseText);

                        var errorsHtml = '<ul>';
                        $.each(response.errors, function (key, value) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        errorsHtml += '</ul>';

                        $('#form-messages').removeClass('d-none').removeClass('alert-success').addClass('alert-danger');
                        $('.internal-text').text(response.message);
                    },
                    complete: function () {
                        $('.send-btn-txt').text('Send Now');
                        $('.send-btn').prop('disabled', false);

                    }
                });
            });

        });
    </script>
@endpush
