<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- About -->
                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo" style="margin-bottom: 18px;">
                            <a href="/" style="font-size: 24px;">Crvena Stijena</a>
                        </div>

                        <div class="widget-content">
                            <div class="text"
                                 style="max-width: 560px; line-height: 1.7;">
                                {{ __("importance-of-crvena-stijena-paragraph-one") }}
                            </div>

                            <ul class="social-icon-two"
                                style="margin-top: 22px;">
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
                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget"
                         style="
                            max-width: 220px;
                            margin: 0 auto;
                            text-align: left;
                         ">

                        <h2 class="widget-title"
                            style="
                                margin-top: 0;
                                margin-bottom: 14px;
                                text-align: left;
                            ">
                            {{ __("quick-links") }}
                        </h2>

                        <div class="widget-content">
                            <ul class="list"
                                style="
                                    margin: 0;
                                    padding: 0;
                                ">

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('visit') }}"
                                       style="padding: 0;">
                                        @lang('visit')
                                    </a>
                                </li>

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('importance') }}"
                                       style="padding: 0;">
                                        {{ __('information') }}
                                    </a>
                                </li>

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('goals') }}"
                                       style="padding: 0;">
                                        {{ __('current research') }}
                                    </a>
                                </li>

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('books') }}"
                                       style="padding: 0;">
                                        {{ __('publications') }}
                                    </a>
                                </li>

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('village') }}"
                                       style="padding: 0;">
                                        {{ __('petrovici') }}
                                    </a>
                                </li>

                                <li style="margin: 0 0 4px 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('scientific-team') }}"
                                       style="padding: 0;">
                                        {{ __('about us') }}
                                    </a>
                                </li>

                                <li style="margin: 0; padding: 0;">
                                    <a href="{{ LaravelLocalization::localizeUrl('contact') }}"
                                       style="padding: 0;">
                                        {{ __('contact') }}
                                    </a>
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
                <p>
                    © Copyright 2026
                    <a href="/">Crvena Stijena.</a>
                    All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->