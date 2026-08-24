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
                                            'DSC_8848rsz.JPG',
                                            'DSC09641_editedRsz.jpg',
                                            '20220627_080743_copy_567x1008.jpg',
                                            'DSC01181_editedRsz.jpg',
                                            'DSC06208_editedRsz.jpg',
                                            'DSC01186_editedRsz2.jpg',
                                            'DSC_8853rsz.JPG',
                                            'DSC07086_editedRsz.jpg',
                                            'DSC09637_editedRsz.jpg',
                                            'DSC06227_editedRsz.jpg',
                                            'DSC09644_editedRsz.jpg',
                                            '20220629_103054_copy_1008x567.jpg',
                                            'DSC06182_editedRsz.jpg',
                                            'DSC09609_editedRsz.jpg',
                                            '20220727_084619_copy_907x1612.jpg',
                                            'DSC08756_editedRsz.jpg',
                                            'DSC09635_editedRsz.jpg',
                                            'DSC_8840rsz.JPG',
                                            'DSC_8833rsz.JPG',
                                            'DSC06186_editedRsz.jpg',
                                            'DSC00513_editedRsz.jpg',
                                            'DSC09620_editedRsz.jpg',
                                            'DSC03078_editedRsz.jpg',
                                            'DSC09616_editedRsz.jpg',
                                            '20220801_191757_copy_624x1240.jpg',
                                            'DSC03069_editedRsz.jpg',
                                            'US Embassy visit4.jpg',
                                            'DSC_8849rsz.JPG',
                                            'DSC09640_editedRsz.jpg',
                                            'DSC03083_editedRsz.jpg',
                                            'DSC07090_editedRsz.jpg',
                                            'DSC01189_editedRsz.jpg',
                                            'DSC02545_editedRsz.jpg',
                                            'DSC01184_editedRsz.jpg',
                                            'DSC_8867rsz.JPG',
                                            'DSC00521_editedRSZ.jpg',
                                            'DSC09636_editedRsz.jpg',
                                            'DSC09624_editedRsz.jpg',
                                            '20220627_080334_copy_567x1008.jpg',
                                            'DSC01175_editedRsz.jpg',
                                            'DSC_8799_resized.JPG',
                                            'DSC03586_editedRsz.jpg',
                                            'US Embassy visit2.jpg',
                                            '20220629_103000_copy_1008x567.jpg',
                                            'DSC06189_editedRsz.jpg',
                                            'DSC06175_editedRsz.jpg',
                                            'DSC00504_editedRsz.jpg',
                                            'DSC08754_editedRsz.jpg',
                                            'US Embassy visit1.jpg',
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
                                        <div class="carousel-inner" role="listbox">

                                            @foreach($slides as $index => $slide)

                                                <div class="item {{ $index === 0 ? 'active' : '' }}"
                                                     style="height: 70vh; overflow: hidden;">

                                                    <img
                                                        src="{{ asset('images/slideshow/' . $slide) }}"
                                                        alt="Crvena Stijena"
                                                        class="img-responsive center-block"
                                                        style="
                                                            width: 100%;
                                                            height: 70vh;
                                                            object-fit: cover;
                                                            object-position: center;
                                                        ">
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
