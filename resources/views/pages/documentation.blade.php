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
                                    <p>{{ __('documentation-paragraph-one') }}</p>
                                    <p>{{ __('documentation-paragraph-two') }}</p>

                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Documentation 1 20190711_145156-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 550px; object-fit: cover;"
                                                         src="{{asset("images/resource/Documentation 1 20190711_145156-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("documentaton-of-site-caption-2")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Documentation 2 320190710_081011-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Documentation 2 320190710_081011-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("documentaton-of-site-caption-2")}}</p>
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
    <!-- End Sidebar Page Container -->
@endsection
