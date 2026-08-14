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
                                    <p>{{ __('importance-of-crvena-stijena-paragraph-one') }}</p>
                                    <p>{{ __("importance-of-crvena-stijena-paragraph-two") }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/importance-3.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img style=" max-height: 448px;object-fit: cover;"
                                                                                                       src="{{asset("images/resource/importance-3.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/importance-2.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/importance-2.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/importance-1.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/importance-1.jpg")}}" alt=" "></a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{ __("importance-of-crvena-stijena-paragraph-three") }}</p>
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
