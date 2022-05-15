@extends('layout')
@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="event-detail">
                        <!-- Event Detail -->
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <p>{{__("how-to-get-first-paragraph")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        <img src="{{asset('images/resource/event-1.jpg')}}" alt="">
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
