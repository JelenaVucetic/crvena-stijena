@extends('layout')

@section('content')
<!-- Sidebar Page Container -->
<div class="sidebar-page-container" style="padding: 50px 0 50px;">
    <div class="auto-container">

        <div class="row clearfix">

            <!-- Full Width Content -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="blog-detail">

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="lower-content">

                                @php
                                $slides = [
                                'Number1 20250711_145040 resz.jpg',
                                'Number2 DSC01184_editedRsz.jpg',
                                'Number3 20220629_103000_copy_1008x567.jpg',
                                'Number4 DSC09641_editedRsz.jpg',
                                'Number5 DSC00513_editedRsz.jpg',
                                'Number6 DSC_8828.JPG',
                                'Number7 20190712_154117.jpg',
                                'Number8 DSC01186_editedRsz2.jpg',
                                'Number9 DSC06208_editedRsz.jpg',
                                'Number10 DSC07086_editedRsz.jpg',
                                'Number11 DSC_8853rsz.JPG',
                                'Number12 DSC09644_editedRsz.jpg',
                                ];
                                @endphp

                                <div id="homeCarousel"
                                    class="carousel slide"
                                    data-ride="carousel"
                                    data-interval="5000">

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        @foreach($slides as $index => $slide)
                                        <li
                                            data-target="#homeCarousel"
                                            data-slide-to="{{ $index }}"
                                            class="{{ $index === 0 ? 'active' : '' }}">
                                        </li>
                                        @endforeach
                                    </ol>

                                    <!-- Slides -->
                                    <!-- Slides -->
                                    <div class="carousel-inner" role="listbox">

                                        @foreach($slides as $index => $slide)

                                        <div class="item {{ $index === 0 ? 'active' : '' }}">

                                            <!-- Blurred Background -->
                                            <div
                                                class="slide-background"
                                                style="background-image: url('{{ asset('images/slideshow/' . $slide) }}');">
                                            </div>

                                            <!-- Sharp Foreground Image -->
                                            <img
                                                src="{{ asset('images/slideshow/' . $slide) }}"
                                                alt="Crvena Stijena"
                                                class="img-responsive center-block"
                                                loading="eager">

                                        </div>

                                        @endforeach

                                    </div>

                                    <!-- Previous -->
                                    <a class="left carousel-control"
                                        href="#homeCarousel"
                                        role="button"
                                        data-slide="prev">

                                        <span class="glyphicon glyphicon-chevron-left"
                                            aria-hidden="true"></span>

                                        <span class="sr-only">Previous</span>
                                    </a>

                                    <!-- Next -->
                                    <a class="right carousel-control"
                                        href="#homeCarousel"
                                        role="button"
                                        data-slide="next">

                                        <span class="glyphicon glyphicon-chevron-right"
                                            aria-hidden="true"></span>

                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End News Block -->

                </div>

            </div>
            <!-- End Full Width Content -->

        </div>

    </div>
</div>
<!-- End Sidebar Page Container -->
@endsection