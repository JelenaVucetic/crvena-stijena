@extends('layout')

@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="blog-detail">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __('archaeological-excavations-paragraph-one') }}</p>
                                    <p>{{ __('archaeological-excavations-read-more') }}</p>
                                    <p>{{ __('archaeological-excavations-paragraph-two') }}</p>
                                    <p>{{ __('archaeological-excavations-paragraph-three') }}</p>

                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Arch Excavations 2.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Arch Excavations 2.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">
                                                    {{ __('archaeological-excavations-caption-2') }}
                                                </p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Arch Excavations 3 20190711_144529-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Arch Excavations 3 20190711_144529-min.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('archaeological-excavations-caption-3') }}</p>
                                            </div>
                                            <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Arch excavations 5 20190710_080957-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Arch excavations 5 20190710_080957-min.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('archaeological-excavations-caption-5') }}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Arch excavations 6 20190710_080941-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Arch excavations 6 20190710_080941-min.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('archaeological-excavations-caption-6') }}</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        <div class="sidebar-image">
                            <a href="{{ asset('images/resource/Arch excavations4.jpg') }}"
                               class="lightbox-image"
                               data-fancybox="Gallery">
                                <img src="{{ asset('images/resource/Arch excavations4.jpg') }}" alt="">
                            </a>
                            <p class="caption">
                                {{ __('archaeological-excavations-caption-4') }}
                            </p>
                        </div>
                        <div class="sidebar-image" style="padding-top:10px;">
                            <a href="{{ asset('images/resource/Arch excavations 1 .jpg') }}"
                               class="lightbox-image"
                               data-fancybox="Gallery">
                                <img src="{{ asset('images/resource/Arch excavations 1 .jpg') }}" alt="">
                            </a>
                            <p class="caption">{{ __('archaeological-excavations-caption-1') }}</p>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </div>
@endsection
