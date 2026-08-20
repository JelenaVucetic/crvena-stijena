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
                                    <div class="post-images" style="margin-top: 20px">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Petrovici 2 20190720_121445-compressed.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Petrovici 2 20190720_121445-compressed.jpg")}}" alt=" "></a>
                                                <p class="caption">{{ __('petrovici-caption-2') }}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Petrovici 1 20210815_104310-compressed.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Petrovici 1 20210815_104310-compressed.jpg")}}" alt=" "></a>
                                                <p class="caption">{{ __('petrovici-caption-1') }}</p>
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
