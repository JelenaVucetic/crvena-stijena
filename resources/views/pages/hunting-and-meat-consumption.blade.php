@extends('layout')

@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="padding: 50px 0 50px;">
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="blog-detail">

                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <p>
                                        {{ __('hunting-and-meat-consumption-paragraph-one') }}
                                    </p>

                                    <div class="post-images">
                                        <div class="row clearfix">

                                            <!-- Image 1 - Bones -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Hunting and Meat Consumption 2 Morin _ Soulier Fig 14_8 cutmarks-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        src="{{ asset('images/resource/Hunting and Meat Consumption 2 Morin _ Soulier Fig 14_8 cutmarks-min.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('hunt-caption-1') }}<sup>1</sup>
                                                </p>
                                            </div>


                                            <!-- Image 2 - Wikimedia -->
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ asset('images/resource/Hunting and Meat Consumption 1-min.jpg') }}"
                                                   class="lightbox-image"
                                                   data-fancybox="Gallery">

                                                    <img
                                                        src="{{ asset('images/resource/Hunting and Meat Consumption 1-min.jpg') }}"
                                                        alt="">
                                                </a>

                                                <p class="caption">
                                                    {{ __('hunt-caption-2-before') }}

                                                    <a href="http://creativecommons.org/licenses/by/2.0/"
                                                       target="_blank"
                                                       rel="noopener noreferrer">
                                                        {{ __('hunt-caption-2-license') }}
                                                    </a>{{ __('hunt-caption-2-after') }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->

                    </div>
                </div>

            </div>


            <!-- Figure Credits -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <hr>

                    <p class="text-muted" style="font-size: 12px">
                        <strong>1 = {{ __('figure-credit') }}</strong>
                        {{ __('hunting-and-meat-consumption-credit-2') }}
                    </p>

                </div>
            </div>
            <!-- End Figure Credits -->

        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
