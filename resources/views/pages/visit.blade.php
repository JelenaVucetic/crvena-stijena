@extends('layout')

@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">


                <div class="event-detail">
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>{{ __("visit-first-paragraph") }}</p>
                                    <p>{{ __("visit-second-paragraph") }}</p>
                                    <p>{{ __("visit-third-paragraph") }}</p>

                                    <div class="post-images">
                                        <div class="row clearfix">

                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/background/visit.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/background/visit.jpg') }}" alt="">
                                                </a>
                                            </div>

                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/visit-side-2.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/visit-side-2.jpg') }}" alt="">
                                                </a>
                                            </div>

                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/visit-side.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/visit-side.jpg') }}" alt="">
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
