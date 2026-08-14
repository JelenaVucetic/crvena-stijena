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
                                    <p>{{ __('who-lived-paragraph-one') }}</p>
                                    <p>{{ __("who-lived-paragraph-two") }}</p>
                                    <p>{{ __("who-lived-paragraph-three") }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                           {{-- <div class="image col-md-4 col-sm-4 col-xs-12">
                                                <a href="{{asset("images/resource/Who Lived 3.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Who Lived 3.jpg")}}" alt=" "></a>
                                            </div>--}}
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Who Lived 2.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Who Lived 2.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("who-lived-caption-2")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Who Lived 1.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Who Lived 1.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("who-lived-caption-1")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Who Lived 4 20210816_094848.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Who Lived 4 20210816_094848.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("who-lived-caption-4")}}</p>
                                            </div>
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
                        <a href="{{asset("images/resource/Who Lived 3.jpg")}}"
                           class="lightbox-image" data-fancybox="Gallery"><img
                                src="{{asset("images/resource/Who Lived 3.jpg")}}" alt=" "></a>
                        <p class="caption">{{__("who-lived-caption-3")}}</p>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

