@extends('layout')
@section('content')

    <!-- Exhibitions Section -->
    <section class="exhibitions-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h2>{{ __("scientific team") }}</h2>
            </div>

            <!-- Exhibition Block -->
            <div class="exhibition-block">
                <div class="row clearfix">
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="image"><img src="{{asset('images/gallery/1.jpg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <h4>Director:</h4>
                                    <span class="date" style="font-size: 20px">Dr. Gilbert Tostevin</span>
                                    <p>
                                        Associate Professor <br>
                                        Department of Anthropology <br>
                                        University of Minnesota <br>
                                        Minneapolis, MN, USA <br>
                                        toste003@umn.edu
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="image"><img src="{{asset('images/gallery/1.jpg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <h4> Co-Director:</h4>
                                    <span class="date" style="font-size: 20px">Dr. Gilliane Monnier</span>
                                    <p>
                                        Associate Professor <br>
                                        Department of Anthropology <br>
                                        University of Minnesota <br>
                                        Minneapolis, MN, USA <br>
                                        monni003@umn.edu
                                    </p>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exhibition Block -->
            <div class="exhibition-block">
                <div class="row clearfix">
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="image"><img src="{{asset('images/gallery/1.jpg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <h4>Co-Director:</h4>
                                    <span class="date" style="font-size: 20px">Mr. Goran Pajovic</span>
                                    <p>
                                        Curator of Archaeology<br>
                                        National Museum<br>
                                        Cetinje, Montenegro<br>
                                        monni003@umn.edu<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="image"><img src="{{asset('images/gallery/1.jpg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                  {{--  <h4> Co-Director:</h4>
                                    <span class="date" style="font-size: 20px">Dr. Gilliane Monnier</span>
                                    <p>
                                        Associate Professor <br>
                                        Department of Anthropology <br>
                                        University of Minnesota <br>
                                        Minneapolis, MN, USA <br>
                                        monni003@umn.edu
                                    </p>    --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Exhibitions Section -->


    <!-- Testimonial Section -->
   {{-- <section class="testimonial-section style-two">
        <div class="auto-container">
            <h3>Scientific team</h3>
            <div class="testimonial-carousel owl-carousel owl-theme">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Director:
                            </div>
                            <span class="designation">Dr. Gilbert Tostevin </span>
                            <p>
                                Associate Professor <br>
                                Department of Anthropology <br>
                                University of Minnesota <br>
                                Minneapolis, MN, USA <br>
                                toste003@umn.edu</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Co-Director:
                            </div>
                            <span class="designation">Dr. Gilliane Monnier</span>
                            <p>
                                Associate Professor <br>
                                Department of Anthropology <br>
                                University of Minnesota <br>
                                Minneapolis, MN, USA <br>
                                monni003@umn.edu
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Co-Director:
                            </div>
                            <span class="designation">Mr. Goran Pajovic</span>
                            <p>
                                Curator of Archaeology<br>
                                National Museum<br>
                                Cetinje, Montenegro<br>
                                monni003@umn.edu<br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Lead Archaeologist:
                            </div>
                            <span class="designation">Mr. Mile Bakovic</span>
                            <p>Head, Division of Archaeology<br>
                                Center for Conservation and Archaeology<br>
                                Ministry of Culture<br>
                                Cetinje, Montenegro<br>
                                bakovicmile@yahoo.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Lead Archaeologist:
                            </div>
                            <span class="designation">Mr. Nikola Borovinic</span>
                            <p>Professional Associate, Division of Archaeology<br>
                                Center for Conservation and Archaeology<br>
                                Ministry of Culture<br>
                                Cetinje, Montenegro<br>
                                nikola_borovinic@yahoo.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Geo-archaeologist:
                            </div>
                            <span class="designation">Dr. Carolina Mallol</span>
                            <p>Researcher and Lecturer<br>
                                Departamento de Geografía e Historia<br>
                                Universidad de la Laguna<br>
                                Tenerife, Spain<br>
                                cmallol@ull.edu.es
                            </p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('images/resource/thumb-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content-box">
                            <div class="name">
                                Radiocarbon dating specialist:
                            </div>
                            <span class="designation">Dr. Elisabetta Boaretto</span>
                            <p>Researcher and Lecturer<br>
                                Director, Kimmel Center for Archaeological Science<br>
                                Weizmann Institute of Science<br>
                                Rehovot, Israel<br>
                                Elisabetta.Boaretto@weizmann.ac.il
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End Testimonial Section -->
@endsection
