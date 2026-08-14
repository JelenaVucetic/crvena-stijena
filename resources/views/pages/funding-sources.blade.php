@extends('layout')
@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{ __('funding-paragraph-one') }}</p>
                                    <p>{{ __('funding-paragraph-2') }}</p>
                                    <p>{{ __('funding-paragraph-3') }}</p>
                                    <p>{{ __('funding-paragraph-4') }}</p>
                                    <p>{{ __('funding-paragraph-5') }}</p>
                                    <p>{{ __('funding-paragraph-6') }}</p>
                                    <p>{{ __('funding-paragraph-7') }}</p>
                                   {{-- <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/post-image-1.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/post-image-1.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/post-image-2.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/post-image-2.jpg")}}" alt=" "></a>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/post-image-3.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/post-image-3.jpg")}}" alt=" "></a>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
               {{-- <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        <p>some content/image</p>
                    </aside>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

