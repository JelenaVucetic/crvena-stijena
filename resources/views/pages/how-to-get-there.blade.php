@extends('layout')

@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="event-detail">
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __("how-to-get-first-paragraph") }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12">
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
