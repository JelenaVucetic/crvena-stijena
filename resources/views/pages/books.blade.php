@extends('layout')

@section('content')

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-detail">
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    <!-- Book 1 -->
                                    <div class="row clearfix"
                                         style="
                                            margin-bottom: 45px;
                                            display: flex;
                                            align-items: center;
                                            flex-wrap: wrap;
                                         ">

                                        <div class="col-md-4 col-sm-5 col-xs-12">
                                            <img
                                                src="{{ asset('images/resource/book.jpg') }}"
                                                alt="Crvena stijena – zbornik radova"
                                                class="img-responsive"
                                                style="
                                                    width: 100%;
                                                    max-width: 320px;
                                                    height: auto;
                                                    margin: 0 auto;
                                                ">
                                        </div>

                                        <div class="col-md-8 col-sm-7 col-xs-12">
                                            <p style="
                                                font-size: 16px;
                                                line-height: 1.8;
                                                margin: 0;
                                            ">
                                                Basler, Đuro (ed.) 1975.
                                                <span style="color: #d9a65a;">
                                                    <em>
                                                        Crvena stijena – zbornik radova.
                                                    </em>
                                                </span>
                                                Zajednica kulturnih ustanova, Nikšić.
                                            </p>
                                        </div>

                                    </div>


                                    <!-- Book 2 -->
                                    <div class="row clearfix"
                                         style="
                                            margin-bottom: 45px;
                                            display: flex;
                                            align-items: center;
                                            flex-wrap: wrap;
                                         ">

                                        <div class="col-md-4 col-sm-5 col-xs-12">
                                            <img
                                                src="{{ asset('images/resource/Crvena_Stijena_Mihailovic_2024.jpg') }}"
                                                alt="Middle Paleolithic assemblages from Crvena Stijena"
                                                class="img-responsive"
                                                style="
                                                    width: 100%;
                                                    max-width: 320px;
                                                    height: auto;
                                                    margin: 0 auto;
                                                ">
                                        </div>

                                        <div class="col-md-8 col-sm-7 col-xs-12">
                                            <p style="
                                                font-size: 16px;
                                                line-height: 1.8;
                                                margin: 0;
                                            ">
                                                Mihailović, Dušan 2024.
                                                <span style="color: #d9a65a;">
                                                    <em>
                                                        Middle Paleolithic assemblages from Crvena Stijena:
                                                        insights from the 1954-1963 excavations.
                                                    </em>
                                                </span>
                                                Belgrade: Faculty of Philosophy, University of Belgrade.
                                            </p>
                                        </div>

                                    </div>


                                    <!-- Book 3 -->
                                    <div class="row clearfix"
                                         style="
                                            margin-bottom: 30px;
                                            display: flex;
                                            align-items: center;
                                            flex-wrap: wrap;
                                         ">

                                        <div class="col-md-4 col-sm-5 col-xs-12">
                                            <img
                                                src="{{ asset('images/resource/Crvena_Stijena_Whallon_2017.jpg') }}"
                                                alt="Crvena Stijena in Cultural and Ecological Context"
                                                class="img-responsive"
                                                style="
                                                    width: 100%;
                                                    max-width: 320px;
                                                    height: auto;
                                                    margin: 0 auto;
                                                ">
                                        </div>

                                        <div class="col-md-8 col-sm-7 col-xs-12">
                                            <p style="
                                                font-size: 16px;
                                                line-height: 1.8;
                                                margin: 0;
                                            ">
                                                Whallon, Robert (ed.) 2017.
                                                <span style="color: #d9a65a;">
                                                    <em>
                                                        Crvena Stijena in Cultural and Ecological Context:
                                                        Multidisciplinary Archaeological Research in Montenegro.
                                                    </em>
                                                </span>
                                                Podgorica: Montenegrin Academy of Sciences and Arts and National Museum.
                                            </p>
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

@endsection