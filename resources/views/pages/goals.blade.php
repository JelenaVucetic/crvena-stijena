@extends('layout')

@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="padding: 50px 0 50px;">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Centered Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="blog-detail">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>
                                        {{ __('goals-paragraph-one') }}
                                    </p>

                                    <div class="post-images">
                                        <div class="row clearfix">

                                            <div class="image col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                                                <a href="{{ asset('images/resource/goals.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        class="img-responsive center-block"
                                                        src="{{ asset('images/resource/goals.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('goals-caption-1') }}<sup>1</sup>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->

                    </div>
                </div>
                <!-- End Centered Content Side -->

            </div>


            <!-- Figure Credits -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <hr>

                    <p class="text-muted" style="font-size: 12px">
                        <strong>1 = {{ __('figure-credit') }}</strong>
                        {{ __('goals-credit-1') }}
                    </p>

                </div>
            </div>
            <!-- End Figure Credits -->

        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
