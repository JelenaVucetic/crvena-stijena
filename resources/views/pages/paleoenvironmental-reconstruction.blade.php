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


                                    <!-- Bottom Images -->
                                    <div class="post-images">
                                        <div class="row clearfix">

                                            <!-- Image 1 -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/paleoenvironment-reconst-1.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        class="img-responsive"
                                                        src="{{ asset('images/resource/paleoenvironment-reconst-1.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('paleoenvironmental-caption-1') }}<sup>1</sup>
                                                </p>
                                            </div>


                                            <!-- Image 3 -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/paleoenvironment-reconst-3.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        class="img-responsive"
                                                        src="{{ asset('images/resource/paleoenvironment-reconst-3.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('paleoenvironmental-caption-3') }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>


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


                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Microfauna Images -->
                        <div class="row clearfix">

                            <!-- Image 1 -->
                            <div class="image col-md-6 col-sm-6 col-xs-6" style="padding: 5px">
                                <a href="{{ asset('images/resource/Feldmaus_Microtus_arvalis.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        class="img-responsive center-block"
                                        src="{{ asset('images/resource/Feldmaus_Microtus_arvalis.jpg') }}"
                                        alt="">
                                </a>
                            </div>


                            <!-- Image 2 -->
                            <div class="image col-md-6 col-sm-6 col-xs-6"  style="padding: 5px">
                                <a href="{{ asset('images/resource/microtus.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        class="img-responsive center-block"
                                        src="{{ asset('images/resource/microtus.jpg') }}"
                                        alt="">
                                </a>
                            </div>

                        </div>


                        <div class="row clearfix">

                            <!-- Image 3 - Centered -->
                            <div class="image col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3"  style="padding: 5px; margin-top: 5px; margin-left: 0px">
                                <a href="{{ asset('images/resource/Microtus_nivalis.jpg') }}"
                                   class="lightbox-image"
                                   data-fancybox="Gallery">

                                    <img
                                        class="img-responsive center-block"
                                        src="{{ asset('images/resource/Microtus_nivalis.jpg') }}"
                                        alt="">
                                </a>
                            </div>

                        </div>


                        <!-- Caption for microfauna group -->
                        <p class="caption">
                            {{ __('paleoenvironmental-caption-2') }}
                        </p>

                    </aside>
                </div>
                <!-- End Sidebar Side -->

            </div>


            <!-- Figure Credits -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr>
                    <p class="text-muted" style="font-size: 12px">
                        <strong>1 = {{ __('figure-credit') }}</strong>
                        {{ __('paleoenvironmental-credit-1') }}
                    </p>
                </div>
            </div>
            <!-- End Figure Credits -->

        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
