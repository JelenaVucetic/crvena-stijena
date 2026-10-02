@extends('layout')

@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Main Content -->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="event-detail">
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>{{ __("visit-first-paragraph") }}</p>
                                    <p>{{ __("visit-second-paragraph") }}</p>
                                    <p>{{ __("visit-third-paragraph") }}</p>

                                    <div class="post-images">
                                        <div class="row clearfix">

                                         <div class="image col-md-12 col-sm-12 col-xs-12">
                                                <a href="{{ asset('images/resource/visit-side.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img
                                                        src="{{ asset('images/resource/visit-side.jpg') }}"
                                                        alt=""
                                                        style="width: 100%; height: 320px; object-fit: cover;">
                                                </a>
                                            </div>

                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/background/visit.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img
                                                        src="{{ asset('images/background/visit.jpg') }}"
                                                        alt=""
                                                        style="width: 100%; height: 260px; object-fit: cover;">
                                                </a>
                                            </div>

                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/visit-side-2.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img
                                                        src="{{ asset('images/resource/visit-side-2.jpg') }}"
                                                        alt=""
                                                        style="width: 100%; height: 260px; object-fit: cover;">
                                                </a>
                                            </div>

                                            <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>

                                           

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar -->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">

                     <div class="sidebar-image">
                            <a href="{{ asset('images/resource/Visit 6 IMG_20220706_115748.jpg') }}"
                               class="lightbox-image"
                               data-fancybox="Gallery">
                                <img
                                    src="{{ asset('images/resource/Visit 6 IMG_20220706_115748.jpg') }}"
                                    alt=""
                                    style="width: 100%; height: 610px; object-fit: cover;">
                            </a>
                        </div>

       

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection