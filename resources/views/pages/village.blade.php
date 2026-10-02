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

                                <!-- Text Before Images -->
                                <p>
                                    {{ __('petrovici-paragraph-one') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-two') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-three') }}
                                </p>


                                <!-- Images -->
                                <div class="post-images" style="margin-top: 30px; margin-bottom: 30px;">
                                    <div class="row clearfix">

                                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                            <div class="row clearfix">

                                                <!-- Left Image -->
                                                <div class="image col-md-5 col-sm-5 col-xs-12">
                                                    <a href="{{ asset('images/resource/Petrovici 2 20190720_121445-compressed.jpg') }}"
                                                        class="lightbox-image"
                                                        data-fancybox="Gallery">

                                                        <img
                                                            class="img-responsive center-block"
                                                            src="{{ asset('images/resource/Petrovici 2 20190720_121445-compressed.jpg') }}"
                                                            alt="">
                                                    </a>

                                                    <p class="caption">
                                                        {{ __('petrovici-caption-2') }}
                                                    </p>
                                                </div>


                                                <!-- Right Column -->
                                                <div class="col-md-7 col-sm-7 col-xs-12">

                                                    <!-- Image 2 -->
                                                    <div class="image">
                                                        <a href="{{ asset('images/resource/Petrovici 1 20210815_104310-compressed.jpg') }}"
                                                            class="lightbox-image"
                                                            data-fancybox="Gallery">

                                                            <img
                                                                class="img-responsive"
                                                                src="{{ asset('images/resource/Petrovici 1 20210815_104310-compressed.jpg') }}"
                                                                alt=""
                                                                style="width: 100%;">
                                                        </a>

                                                        <p class="caption">
                                                            {{ __('petrovici-caption-1') }}
                                                        </p>
                                                    </div>


                                                    <!-- Image 3 -->
                                                    <div class="image" style="margin-top: 25px;">
                                                        <a href="{{ asset('images/resource/20250716_205307.jpg') }}"
                                                            class="lightbox-image"
                                                            data-fancybox="Gallery">

                                                            <img
                                                                class="img-responsive"
                                                                src="{{ asset('images/resource/20250716_205307.jpg') }}"
                                                                alt=""
                                                                style="width: 100%;">
                                                        </a>
                                                        <p class="caption">
                                                            {{ __('petrovici-caption-3') }}
                                                        </p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Images -->

                                <!-- Text After Images -->
                                <p>
                                    {{ __('petrovici-paragraph-four') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-five') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-six') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-seven') }}
                                </p>

                                <p>
                                    {{ __('petrovici-paragraph-eight') }}
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- End News Block -->

                </div>

            </div>
            <!-- End Full Width Content -->

        </div>


        <!-- Author -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <hr>

                <p class="text-muted text-right" style="font-size: 12px;">
                    {{ __('petrovici-author') }}
                </p>

            </div>
        </div>
        <!-- End Author -->

    </div>
</div>
<!-- End Sidebar Page Container -->
@endsection