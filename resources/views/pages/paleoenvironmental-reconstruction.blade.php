@extends('layout')

@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="padding: 50px 0 50px;">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-detail">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>
                                        {{ __('paleoenvironmental-reconstruction-paragraph-one') }}
                                    </p>

                                    <p>
                                        {{ __('paleoenvironmental-reconstruction-paragraph-two') }}
                                    </p>

                                    <p>
                                        {{ __('paleoenvironmental-reconstruction-paragraph-three') }}
                                    </p>


                                    <!-- Main Images -->
                                    <div class="post-images" style="margin-top: 30px;">
                                        <div class="row clearfix">

                                            <!-- Plant Image -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">

                                                <a href="{{ asset('images/resource/paleoenvironment-reconst-1.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        class="img-responsive center-block"
                                                        src="{{ asset('images/resource/paleoenvironment-reconst-1.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('paleoenvironmental-caption-1') }}<sup>1</sup>
                                                </p>

                                            </div>


                                            <!-- Archaeologists Image -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">

                                                <a href="{{ asset('images/resource/paleoenvironment-reconst-3.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        class="img-responsive center-block"
                                                        src="{{ asset('images/resource/paleoenvironment-reconst-3.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('paleoenvironmental-caption-3') }}<sup>3</sup>
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Main Images -->


                                    <p>
                                        {{ __('paleoenvironmental-reconstruction-paragraph-four') }}
                                    </p>

                                    <p>
                                        {{ __('paleoenvironmental-reconstruction-paragraph-five') }}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->

                    </div>
                </div>
                <!-- End Content Side -->


                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Microfauna Image 1 -->
                        <div class="row clearfix">
                            <div class="image col-md-12 col-sm-12 col-xs-12"
                                 style="margin-bottom: 15px;">

                                <a href="{{ asset('images/resource/Feldmaus_Microtus_arvalis.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        src="{{ asset('images/resource/Feldmaus_Microtus_arvalis.jpg') }}"
                                        alt=""
                                        style="
                                            width: 100%;
                                            height: 190px;
                                            object-fit: cover;
                                            object-position: center;
                                        ">
                                </a>

                            </div>
                        </div>


                        <!-- Microfauna Image 2 -->
                        <div class="row clearfix">
                            <div class="image col-md-12 col-sm-12 col-xs-12"
                                 style="margin-bottom: 15px;">

                                <a href="{{ asset('images/resource/Microtus_nivalis.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        src="{{ asset('images/resource/Microtus_nivalis.jpg') }}"
                                        alt=""
                                        style="
                                            width: 100%;
                                            height: 190px;
                                            object-fit: cover;
                                            object-position: center;
                                        ">
                                </a>

                            </div>
                        </div>


                        <!-- Microfauna Image 3 -->
                        <div class="row clearfix">
                            <div class="image col-md-12 col-sm-12 col-xs-12"
                                 style="margin-bottom: 10px;">

                                <a href="{{ asset('images/resource/microtus.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        src="{{ asset('images/resource/microtus.jpg') }}"
                                        alt=""
                                        style="
                                            width: 100%;
                                            height: 190px;
                                            object-fit: cover;
                                            object-position: center;
                                        ">
                                </a>

                            </div>
                        </div>


                        <!-- Caption for Microfauna Images -->
                        <p class="caption">
                            {{ __('paleoenvironmental-caption-2') }}<sup>2</sup>
                        </p>

                    </aside>
                </div>
                <!-- End Sidebar Side -->

            </div>


            <!-- Figure Credits -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <hr>

                    <p class="text-muted" style="font-size: 12px;">
                        <strong>1 = {{ __('figure-credit') }}</strong>
                        {{ __('paleoenvironmental-credit-1') }}
                    </p>

                    <p class="text-muted" style="font-size: 12px;">
                        <strong>2 = {{ __('figure-credit') }}</strong>
                        {{ __('paleoenvironmental-credit-2') }}
                    </p>

                    <p class="text-muted" style="font-size: 12px;">
                        <strong>3 = {{ __('figure-credit') }}</strong>
                        {{ __('paleoenvironmental-credit-3') }}
                    </p>

                </div>
            </div>
            <!-- End Figure Credits -->

        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
