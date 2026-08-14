<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- About -->
                <div class="footer-column col-md-4 col-sm-4 col-xs-12 te">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo">
                            <a href="/" style="font-size: 24px">Crvena Stijena</a>
                        </div>

                        <div class="widget-content">
                            <div class="text">
                                {{ __("importance-of-crvena-stijena-paragraph-one") }}
                            </div>

                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column col-md-4 col-sm-4 col-xs-12 text-center" >
                    <div class="footer-widget links-widget">
                        <h2 class="widget-title">{{ __("quick-links") }}</h2>

                        <div class="widget-content">
                            <ul class="list">
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('visit') }}">
                                        @lang('visit')
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('importance') }}">
                                        {{ __('information') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('goals') }}">
                                        {{ __('current research') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('books') }}">
                                        {{ __('publications') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('village') }}">
                                        {{ __('petrovici') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('scientific-team') }}">
                                        {{ __('about us') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('contact') }}">
                                        {{ __('contact') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="footer-column col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="footer-widget links-widget">
                        <h2 class="widget-title">{{ __("contact") }}</h2>

                        <div class="widget-content">
                            <ul class="list">
                                <li>
                                    Crvena Stijena<br>
                                    32 Quincy Street<br>
                                    Cambridge, MA
                                </li>
                                <li>
                                    (617) 495-9400<br>
                                    (617) 495-9500
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text clearfix">
                <p>© Copyright 2022 <a href="/">Crvena Stijena.</a> All Rights Reserved </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
