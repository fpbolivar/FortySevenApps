@extends('web.layouts.main')
@section('page-title', 'Contact Us')
@section('content')
    <div class="titlebar scheme-light text-center bg-cover" style="background-image: url(./assets/demo/bg/bg-105.jpg)">
        <div class="titlebar-inner pt-60 pb-40">
            <div class="container titlebar-container">
                <div class="row titlebar-container">
                    <div class="titlebar-col col-md-12">
                        <h1 style="font-size: 40px;">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 67px;"></div>
    </div>

    {{-- next secrion --}}
    <section class="vc_row pt-100 pb-100">
        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-12 px-4 pt-45 pb-30 bg-white box-shadow-1">

                    <div class="row d-flex flex-wrap align-items-center">

                        <div class="lqd-column col-md-6 col-md-offset-1">

                            <header class="fancy-title">
                                <h2>Drop us a line</h2>
                                <p>We are here to answer any question you may have</p>
                            </header><!-- /.fancy-title -->

                        </div><!-- /.lqd-column col-md-6 col-md-offset-1 -->

                        <div class="lqd-column col-md-4 hidden-sm hidden-xs text-right">

                            <div class="iconbox text-right iconbox-xl iconbox-icon-animating" data-animate-icon="true"
                                data-plugin-options="{&quot;resetOnHover&quot;:true,&quot;color&quot;:&quot;rgb(216, 219, 226)&quot;,&quot;hoverColor&quot;:&quot;rgb(0, 0, 0)&quot;}">
                                <div class="iconbox-icon-wrap">
                                    <span class="iconbox-icon-container">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="64px" height="64px" viewBox="0 0 64 64"
                                            enable-background="new 0 0 64 64" xml:space="preserve">
                                            <style>
                                                #undefined:hover .iconbox-icon-container defs stop:first-child {
                                                    stop-color: rgb(0, 0, 0);
                                                }

                                                #undefined:hover .iconbox-icon-container defs stop:last-child {
                                                    stop-color: rgb(0, 0, 0);
                                                }
                                            </style>
                                            <defs xmlns="http://www.w3.org/2000/svg">
                                                <linearGradient gradientUnits="userSpaceOnUse" id="grad949469"
                                                    x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" stop-color="rgb(216, 219, 226)"></stop>
                                                    <stop offset="100%" stop-color="rgb(216, 219, 226)"></stop>
                                                </linearGradient>
                                            </defs>
                                            <path stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10"
                                                d="M1,30L63,1L23,41Z" stroke="url(#grad949469)" fill="none"
                                                style="stroke-dasharray: 150, 152; stroke-dashoffset: 0;"></path>
                                            <path stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10"
                                                d="M34,63L63,1L23,41Z" stroke="url(#grad949469)" fill="none"
                                                style="stroke-dasharray: 150, 152; stroke-dashoffset: 0;"></path>
                                        </svg>
                                    </span>
                                </div><!-- /.iconbox-icon-wrap -->
                            </div><!-- /.iconbox -->
                        </div><!-- /.lqd-column col-md-4 hidden-sm hidden-xs -->

                    </div><!-- /.row -->

                    <div class="row">

                        <div class="lqd-column col-md-10 col-md-offset-1">

                            <div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
                                <form  id="validateForm" action="{{ route('contact.mail') }}" method="post">
                                    @csrf
                                    <div class="row d-flex flex-wrap">
                                        @include('admin.layouts.message')
                                        <div class="lqd-column col-md-6 mb-20">
                                            <input class="lh-25 {{$errors->first('name') ? "mb-10" : "mb-30"}}" type="text" name="name"
                                                aria-required="true"aria-invalid="false" placeholder="Name *" required>
                                            {!! $errors->first(
                                                'name',
                                                '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>',
                                            ) !!}
                                            <input class="lh-25 {{$errors->first('email') ? "mb-10" : "mb-30"}}" type="email" name="email"
                                                placeholder="Your email address  *" required="">
                                            {!! $errors->first(
                                                'email',
                                                '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>',
                                            ) !!}
                                            <input class="lh-25 {{$errors->first('mobile') ? "mb-10" : "mb-30"}}" type="tel" name="mobile" aria-required="true"
                                                placeholder="Mobile no  *" required="">
                                            {!! $errors->first(
                                                'mobile',
                                                '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>',
                                            ) !!}
                                        </div><!-- /.col-md-6 -->
                                        <div class="lqd-column col-md-6 mb-0">
                                            <textarea class="{{$errors->first(
                                                'message') ? "mb-10" : "mb-10"}}" cols="10" rows="7" name="message" aria-required="true" aria-invalid="false" placeholder="Message  *"
                                                required=""></textarea>
                                            {!! $errors->first(
                                                'message',
                                                '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>',
                                            ) !!}
                                        </div><!-- /.col-md-12 -->
                                        <div class="lqd-column col-md-6">
                                            <p class="font-size-16 opacity-07"><em>We all know how important your
                                                    information is. They are always safe with us.</em></p>
                                        </div><!-- /.col-md-6 -->
                                        <div class="lqd-column col-md-6 text-md-right">
                                            <input type="submit" value="Send message"
                                                class="font-size-13 ltr-sp-1 font-weight-bold">
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </form>
                                <div class="contact-form-result hidden"></div><!-- /.contact-form-result -->
                            </div><!-- /.contact-form -->

                        </div><!-- /.col-md-10 col-md-offset-1 -->

                    </div><!-- /.row -->

                </div><!-- /.lqd-column col-md-12 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection

@section('js')
<script src="{{ asset('assets/web/assets/validate/jquery.min.js')}}"> </script>  
<script src="{{ asset('assets/web/assets/validate/jquery.validate.min.js')}}"> </script>  
<script>
    $("#validateForm").validate({
        errorClass: "text-danger",
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            mobile: {
                required: true,
                digits: true
            },
            message: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Required.",
            },
            email: {
                required: "Required.",
            },
            mobile: {
                required: "Required.",
            },
            message: {
                required: "Required.",
            }
        },
    })
</script>
@endsection