@extends('layout')
@section('content')
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="inner-container clearfix">

        <!-- Info Column -->
        <div class="info-column">
            <div class="inner-column">
                <div class="info-box">
                    <h4>Location</h4>
                    <p>On view at The Met Fifth Avenue<br> in Galleries 800 &amp; 809</p>
                </div>

                <div class="info-box">
                    <h4>Phone</h4>
                    <p>+3 800 666 3333</p>
                    <p>+1 200 300 4000</p>
                </div>

                <div class="info-box">
                    <h4>Email</h4>
                    <p><a href="#">support@lods.com</a></p>
                    <p><a href="#">lods@museum.com</a></p>
                </div>
            </div>
        </div>

        <!-- form Column -->
        <div class="form-column">
            <div class="inner-column">
                <h3>Get a Quote</h3>
                <!-- Contact Form -->
                <div class="contact-form">
                    <!--Contact Form-->
                    <form method="" action="" id="">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="username" placeholder="Name" required>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                <textarea name="message" placeholder="Leave a Message..."></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                <button type="submit" class="theme-btn btn-style-two">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><!--End Contact Form -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Page Section -->
@endsection




