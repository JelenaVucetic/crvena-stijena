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
                                    <p>
                                        {{ __('journal-articles-paragraph-nine-before') }}

                                        <a href="https://www.ucg.ac.me/skladiste/blog_23592/objava_89454/fajlovi/Mihailovic_D_Mihailovic_B_Whallon_R_2017_1.pdf"
                                           target="_blank"
                                           rel="noopener noreferrer">
                                            {{ __('journal-articles-paragraph-nine-title') }}
                                        </a>

                                        {{ __('journal-articles-paragraph-nine-after') }}
                                    </p>
                                    <div class="post-images">
                                        <div class="row clearfix">
                                            <div class="image col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{asset("images/resource/book.jpg")}}"
                                                   class="lightbox-image" data-fancybox="Gallery"><img
                                                        src="{{asset("images/resource/book.jpg")}}" alt=" "></a>
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

