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
                                    <p>{{ __('finds-paragraph-one') }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Finds 1 20210814_121650-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 450px; object-fit: cover;"
                                                        src="{{asset("images/resource/Finds 1 20210814_121650-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("finds-caption-1")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Finds 2 20210805_090806-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 450px; object-fit: cover;"
                                                        src="{{asset("images/resource/Finds 2 20210805_090806-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("finds-caption-2")}}</p>
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
