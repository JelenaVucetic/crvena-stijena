@extends('layout')
@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __('geoarchaeology-paragraph-one') }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/geoarcheaology-1.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/geoarcheaology-1.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("geoarchaeology-caption-1")}}</p>

                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/geoarcheaology-2.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 220px; object-fit: cover;"
                                                         src="{{asset("images/resource/geoarcheaology-2.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("geoarchaeology-caption-2")}}</p>
                                            </div>
                                            <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/geoarchaeology-3.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/geoarchaeology-3.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("geoarchaeology-caption-3")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/geoarchaeology-4.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 295px; object-fit: cover;"
                                                         src="{{asset("images/resource/geoarchaeology-4.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("geoarchaeology-caption-4")}}</p>
                                            </div>
                                            <div class="clearfix"></div>
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
    <!-- End Sidebar Page Container -->
@endsection
