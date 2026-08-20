@extends('layout')

@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Centered Content -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="blog-detail">
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="lower-content">

                                    {{-- 1. Frahm et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>01</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-one-before') }}

                                                <a href="https://doi.org/10.1371/journal.pone.0266362"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    {{ __('journal-articles-paragraph-one-title') }}
                                                </a>

                                                {{ __('journal-articles-paragraph-one-after') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 2. Monnier et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>02</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-two-before') }}

                                                {{-- Add link when PDF is available --}}
                                                {{ __('journal-articles-paragraph-two-title') }}

                                                {{ __('journal-articles-paragraph-two-after') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 3. Jones et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>03</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-three-before') }}

                                                <a href="https://www.sciencedirect.com/science/article/am/pii/S0305440320302284"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    {{ __('journal-articles-paragraph-three-title') }}
                                                </a>

                                                {{ __('journal-articles-paragraph-three-after') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 4. Bradák et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>04</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-four') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 5. Lambrecht et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>05</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-five-before') }}

                                                <a href="https://link.springer.com/article/10.1007/s12520-020-01263-3"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    {{ __('journal-articles-paragraph-five-title') }}
                                                </a>

                                                {{ __('journal-articles-paragraph-five-after') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 6. Rodríguez de Vera et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>06</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-six') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 7. Jambrina-Enríquez et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>07</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-seven-before') }}

                                                <a href="https://www.sciencedirect.com/science/article/pii/S0277379119301660"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    {{ __('journal-articles-paragraph-seven-title') }}
                                                </a>

                                                {{ __('journal-articles-paragraph-seven-after') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 8. Baković et al. --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>08</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-eight') }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>


                                    {{-- 9. Whallon --}}
                                    <div class="row">
                                        <div class="col-xs-1 text-right">
                                            <span class="text-muted">
                                                <strong>09</strong>
                                            </span>
                                        </div>

                                        <div class="col-xs-11">
                                            <p>
                                                {{ __('journal-articles-paragraph-nine-before') }}

                                                <a href="https://www.ucg.ac.me/skladiste/blog_23592/objava_89454/fajlovi/Mihailovic_D_Mihailovic_B_Whallon_R_2017_1.pdf"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    {{ __('journal-articles-paragraph-nine-title') }}
                                                </a>

                                                {{ __('journal-articles-paragraph-nine-after') }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Centered Content -->

            </div>
        </div>
    </div>
@endsection
