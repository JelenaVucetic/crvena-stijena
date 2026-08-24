@extends('layout')

@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="padding: 50px 0 50px;">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Full Width Content -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-detail">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>
                                        {{ __('age-of-the-site-paragraph-one') }}
                                    </p>

                                    <p>
                                        {{ __('age-of-the-site-paragraph-two') }}
                                    </p>


                                    <!-- Centered Images -->
                                    <div class="post-images" style="margin-top: 30px;">
                                        <div class="row clearfix">

                                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                                                <div class="row clearfix">

                                                    <!-- Image 1 -->
                                                    <div class="image col-md-6 col-sm-6 col-xs-12">
                                                        <a href="{{ asset('images/resource/Age of Site 20170530_103828.jpg') }}"
                                                           class="lightbox-image"
                                                           data-fancybox="Gallery">

                                                            <img
                                                                class="img-responsive center-block"
                                                                src="{{ asset('images/resource/Age of Site 20170530_103828.jpg') }}"
                                                                alt="">
                                                        </a>

                                                        <p class="caption">
                                                            {{ __('age-of-site-caption-1') }}
                                                        </p>
                                                    </div>


                                                    <!-- Image 2 -->
                                                    <div class="image col-md-6 col-sm-6 col-xs-12">
                                                        <a href="{{ asset('images/resource/Age of Site Dangoor Lab2-min.jpg') }}"
                                                           class="lightbox-image"
                                                           data-fancybox="Gallery">

                                                            <img
                                                                class="img-responsive center-block"
                                                                src="{{ asset('images/resource/Age of Site Dangoor Lab2-min.jpg') }}"
                                                                alt="">
                                                        </a>

                                                        <p class="caption">
                                                            {{ __('age-of-site-caption-2') }}
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Centered Images -->

                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->

                    </div>
                </div>
                <!-- End Full Width Content -->

            </div>

        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
