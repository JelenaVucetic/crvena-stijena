@extends('layout')
@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __('neanderthal-fire-use-paragraph-one') }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Neanderthal Fire Use 1 20170602_180821-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Neanderthal Fire Use 1 20170602_180821-min.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">
                                                    {{ __('neanderthal-fire-use-caption-1') }}
                                                </p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Neanderthal Fire Use 3 Paloma Vidal-compressed.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img style="max-height: 221px;object-fit: cover;"
                                                        src="{{ asset('images/resource/Neanderthal Fire Use 3 Paloma Vidal-compressed.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('neanderthal-fire-use-caption-3') }}</p>
                                            </div>
                                            <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Neanderthal Fire Use 5 MAGNETÓMETRO CRIOGÉNICO_1-compressed.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img src="{{ asset('images/resource/Neanderthal Fire Use 5 MAGNETÓMETRO CRIOGÉNICO_1-compressed.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('neanderthal-fire-use-caption-5') }}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Neanderthal Fire Use 4 Paleomagnetism-compressed.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">
                                                    <img style="max-height: 221px;object-fit: cover;"
                                                         src="{{ asset('images/resource/Neanderthal Fire Use 4 Paleomagnetism-compressed.jpg') }}" alt="">
                                                </a>
                                                <p class="caption">{{ __('neanderthal-fire-use-caption-4') }}</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        <div class="sidebar-image">
                            <a href="{{ asset('images/resource/Neanderthal Fire Use 2 Paloma Vidal experiments-compressed.jpg') }}"
                               class="lightbox-image"
                               data-fancybox="Gallery">
                                <img src="{{ asset('images/resource/Neanderthal Fire Use 2 Paloma Vidal experiments-compressed.jpg') }}" alt="">
                            </a>
                            <p class="caption">
                                {{ __('neanderthal-fire-use-caption-2') }}
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

