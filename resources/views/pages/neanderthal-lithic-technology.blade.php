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
                                    <p>{{ __('neanderthal-lithic-technology-paragraph-one') }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Lithic Technology 1 20210730_102448-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img src="{{asset("images/resource/Lithic Technology 1 20210730_102448-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("neanderthal-lithic-technology-caption-1")}}</p>
                                            </div>
                                           <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/lithic-technology-2.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img style="max-height: 467px;object-fit: contain;"
                                                        src="{{asset("images/resource/lithic-technology-2.jpg")}}" alt=" "></a>
                                               <p class="caption">{{__("neanderthal-lithic-technology-caption-2")}}</p>
                                            </div>
                                            {{--   <div class="image col-md-6 col-sm-6 col-xs-12">
                                                  <a href="{{asset("images/resource/post-image-3.jpg")}}"
                                                     class="lightbox-image" data-fancybox="Gallery"><img
                                                          src="{{asset("images/resource/post-image-3.jpg")}}" alt=" "></a>
                                              </div>--}}
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
                        <div class="image col-md-12 col-sm-12 col-xs-12">
                            <a href="{{asset("images/resource/lithic-technology-3.jpg")}}"
                               class="lightbox-image" data-fancybox="Gallery"><img
                                    src="{{asset("images/resource/lithic-technology-3.jpg")}}" alt=" "></a>
                            <p class="caption">{{__("neanderthal-lithic-technology-caption-3")}}</p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

