@extends('layout')
@section('content')
<!-- Contact Page Section -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="contact-form">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <!--Contact Form-->
        <form  method="post" action="/send-email">
            @csrf
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    <input type="text" name="name" placeholder="Name" required value="{{old('name')}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    <input type="email" name="email" placeholder="Email" required value="{{old('email')}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                    <textarea name="message" placeholder="Leave a Message...">{{old('message')}}</textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                    <button type="submit" class="theme-btn btn-style-two">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Page Section -->
@endsection




