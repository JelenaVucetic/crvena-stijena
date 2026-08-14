@extends('layout')

@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="event-detail">
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __("how-to-get-first-paragraph") }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                                <a href="{{ asset('images/resource/How to Get There-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/How to Get There-min.jpg') }}"
                                                         alt="">
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
