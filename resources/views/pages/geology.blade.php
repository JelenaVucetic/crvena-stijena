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
                                    <p>{{ __('geology-paragraph-one') }}</p>
                                    <p>{{ __("geology-paragraph-two") }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Geology 2 20190614_100333-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Geology 2 20190614_100333-min.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/geology.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/geology.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Geology 1 DJI_0912-min.JPG")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/Geology 1 DJI_0912-min.JPG")}}" alt=" "></a>
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
                        <p>some content/image</p>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
