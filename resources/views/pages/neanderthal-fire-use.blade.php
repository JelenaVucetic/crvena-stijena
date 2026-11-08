@extends('layout')

@section('content')

<div class="sidebar-page-container">
    <div class="auto-container">

        <div class="blog-detail">
            <div class="news-block">
                <div class="inner-box">
                    <div class="lower-content">

                        {{-- Paragraph --}}
                        <p style="margin-bottom: 20px;">
                            {{ __('neanderthal-fire-use-paragraph-one') }}
                        </p>

                        {{-- Gallery --}}
                        <div class="post-images" style="margin-top: 0; padding-top: 0;">

                            <div class="row clearfix" style="margin: 0 -7px;">

                                {{-- LEFT: Landscape photos --}}
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"
                                     style="padding: 0 7px;">

                                    <div class="row clearfix" style="margin: 0 -7px;">

                                        {{-- Image 1 --}}
                                        <div class="col-sm-6 col-xs-12"
                                             style="padding: 0 7px; margin-bottom: 15px;">

                                            <a href="{{ asset('images/resource/Neanderthal Fire Use 1 20170602_180821-min.jpg') }}"
                                               class="lightbox-image"
                                               data-fancybox="Gallery">

                                                <img
                                                    src="{{ asset('images/resource/Neanderthal Fire Use 1 20170602_180821-min.jpg') }}"
                                                    alt="Neanderthal fire use"
                                                    style="width: 100%; height: 210px; object-fit: cover; display: block;"
                                                >
                                            </a>

                                            <p class="caption"
                                               style="margin-top: 8px; margin-bottom: 0;">
                                                {{ __('neanderthal-fire-use-caption-1') }}
                                            </p>

                                        </div>

                                        {{-- Image 2 --}}
                                        <div class="col-sm-6 col-xs-12"
                                             style="padding: 0 7px; margin-bottom: 15px;">

                                            <a href="{{ asset('images/resource/Neanderthal Fire Use 5 MAGNETÓMETRO CRIOGÉNICO_1-compressed.jpg') }}"
                                               class="lightbox-image"
                                               data-fancybox="Gallery">

                                                <img
                                                    src="{{ asset('images/resource/Neanderthal Fire Use 5 MAGNETÓMETRO CRIOGÉNICO_1-compressed.jpg') }}"
                                                    alt="Cryogenic magnetometer"
                                                    style="width: 100%; height: 210px; object-fit: cover; display: block;"
                                                >
                                            </a>

                                            <p class="caption"
                                               style="margin-top: 8px; margin-bottom: 0;">
                                                {{ __('neanderthal-fire-use-caption-5') }}
                                            </p>

                                        </div>

                                        <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>

                                        {{-- Image 3: FULL WIDTH --}}
                                        <div class="col-sm-12 col-xs-12"
                                             style="padding: 0 7px; margin-bottom: 15px;">

                                            <a href="{{ asset('images/resource/Neanderthal Fire Use 4 Paleomagnetism-compressed.jpg') }}"
                                               class="lightbox-image"
                                               data-fancybox="Gallery">

                                                <img
                                                    src="{{ asset('images/resource/Neanderthal Fire Use 4 Paleomagnetism-compressed.jpg') }}"
                                                    alt="Paleomagnetism research"
                                                    style="width: 100%; height: 330px; object-fit: cover; display: block;"
                                                >
                                            </a>

                                            <p class="caption"
                                               style="margin-top: 8px; margin-bottom: 0;">
                                                {{ __('neanderthal-fire-use-caption-4') }}
                                            </p>

                                        </div>

                                    </div>
                                </div>

                                {{-- RIGHT: Portrait --}}
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"
                                     style="padding: 0 7px; margin-bottom: 15px;">

                                    <div class="sidebar-image"
                                         style="max-width: 420px; margin: 0;">

                                        <a href="{{ asset('images/resource/Carolina and hearth.jpg') }}"
                                           class="lightbox-image"
                                           data-fancybox="Gallery">

                                            <img style="max-height: 620px;"
                                                src="{{ asset('images/resource/Carolina and hearth.jpg') }}"
                                                alt="Carolina studying Neanderthal fire use"
                                                style="width: 100%; height: auto; display: block;"
                                            >
                                        </a>

                                        <p class="caption"
                                           style="margin-top: 8px; margin-bottom: 0;">
                                            {{ __('neanderthal-fire-use-caption-2') }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>
                        {{-- End Gallery --}}

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection