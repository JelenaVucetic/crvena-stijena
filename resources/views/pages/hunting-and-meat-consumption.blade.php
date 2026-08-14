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
                                    <p>{{ __('hunting-and-meat-consumption-paragraph-one') }}</p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Hunting and Meat Consumption 2 Morin _ Soulier Fig 14_8 cutmarks-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img src="{{asset("images/resource/Hunting and Meat Consumption 2 Morin _ Soulier Fig 14_8 cutmarks-min.jpg")}}" alt=" "></a>
                                                <p class="caption">{{__("hunt-caption-1")}}</p>
                                            </div>
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/Hunting and Meat Consumption 1-min.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery">
                                                    <img src="{{asset("images/resource/Hunting and Meat Consumption 1-min.jpg")}}" alt=" "></a>
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
