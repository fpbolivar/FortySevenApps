@extends('web.layouts.main')
@section('page-title', 'About Us')
@section('content')
<div class="titlebar scheme-light text-center bg-cover" style="background-image: url(./assets/demo/bg/bg-105.jpg)">
	<div class="titlebar-inner pt-60 pb-40">
		<div class="container titlebar-container">
			<div class="row titlebar-container">
				<div class="titlebar-col col-md-12">
					<h1 style="font-size: 40px;">About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 67px;"></div>
</div>
<section id="about" class="vc_row bg-no-repeat pt-30 pb-30"
    style="background-image: url(./assets/demo/bg/bg-76.svg); background-position: -90% 80%;">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center">

            <div class="lqd-column col-md-6">

                <div class="liquid-img-group-container lqd-parallax-images-8" data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview", "animationTarget":".liquid-img-group-single", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "direction":"backward", "initValues":{"translateX":-85, "opacity":0}, "animations":{"translateX":0, "opacity":1}}'>
                    <div class="liquid-img-group-inner">

                        <div class="liquid-img-group-single" data-shadow-style="4" data-roundness="8"
                            data-inview="true" data-animate-shadow="true">
                            <div class="liquid-img-group-img-container">
                                <div class="liquid-img-container-inner" data-parallax="true"
                                    data-parallax-from='{"translateY":78}' data-parallax-to='{"translateY":-78}'
                                    data-parallax-options='{"overflowHidden":false, "easing":"linear"}'>
                                    <figure class="w-90">
                                        <img src="{{ asset('assets/web/assets/demo/misc/fi-7.jpg') }}"
                                            alt="Working with Ave" />
                                    </figure>
                                </div><!-- /.liquid-img-container-inner -->
                            </div><!-- /.liquid-img-group-img-container -->
                        </div><!-- /.liquid-img-group-single -->

                        <div class="liquid-img-group-single" data-shadow-style="4" data-roundness="8"
                            data-inview="true" data-animate-shadow="true">
                            <div class="liquid-img-group-img-container">
                                <div class="liquid-img-group-content content-floated-mid">
                                    <a href="https://www.youtube.com/watch?v=vKSA_idPZkc"
                                        class="btn btn-naked fresco btn-icon-block btn-icon-top btn-icon-xlg btn-icon-circle btn-icon-solid">
                                        <span>
                                            <span class="btn-icon"><i class="fa fa-play"></i></span>
                                        </span>
                                    </a>
                                </div><!-- /.liquid-img-group-content -->
                                <div class="liquid-img-container-inner" data-parallax="true"
                                    data-parallax-from='{"translateY":107}' data-parallax-to='{"translateY":-134}'
                                    data-parallax-options='{"overflowHidden":false,"easing":"linear"}'>
                                    <figure>
                                        <img src="{{ asset('assets/web/assets/demo/misc/fi-8.jpg') }}"
                                            alt="Working with Ave" />
                                    </figure>
                                </div><!-- /.liquid-img-container-inner -->
                            </div><!-- /.liquid-img-group-img-container -->
                        </div><!-- /.liquid-img-group-single -->

                    </div><!-- /.liquid-img-group-inner -->
                </div><!-- /.liquid-img-group-container -->

            </div><!-- /.lqd-column col-md-6 -->

            <div data-custom-animations="true"
                data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":30, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'
                class="lqd-column col-md-5 col-md-offset-1">

                <header class="fancy-title mb-50">
                    <h6 class="text-uppercase">About us</h6>
                    <h2 class="lh-1 mb-0" data-fittext="true"
                        data-fittext-options='{"compressor":0.65, "maxFontSize":"72", "minFontSize":"48"}'>
                        <strong>good</strong> design
                    </h2>
                    <h2 class="lh-1 mb-0" data-fittext="true"
                        data-fittext-options='{"compressor":0.65, "maxFontSize":"72", "minFontSize":"48"}'>
                        <strong>good</strong> business
                    </h2>
                </header>

                <p class="font-size-30 lh-105"><i>We know that good design means good business.</i></p>

                <p class="font-size-18 lh-15 mb-55">We help our clients succeed by creating brand identities, digital
                    experiences, and print materials that communicate clearly, achieve marketing goals, and look
                    fantastic.</p>

                <a href="#"
                    class="btn btn-solid text-uppercase btn-md circle btn-bordered border-thin btn-gradient font-weight-bold px-2"
                    data-localscroll="true" data-localscroll-options='{"scrollBelowSection":true}'>
                    <span>
                        <span class="btn-gradient-bg"></span>
                        <span class="btn-txt">More about us</span>
                        <span class="btn-gradient-bg btn-gradient-bg-hover"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xml:space="preserve" class="btn-gradient-border" width="100%" height="100%">
                            <defs>
                                <linearGradient id="svg-border-2" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0%"></stop>
                                    <stop offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <rect x="0.5" y="0.5" rx="29.5" ry="29.5" width="100%"
                                height="100%" stroke="url(#svg-border-2)"></rect>
                        </svg>
                    </span>
                </a>

            </div><!-- /.lqd-column col-md-5 col-md-offset-1 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.vc_row -->
<section class="vc_row pt-120 pb-10">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-6">
                <h6 class="text-uppercase">About {{env('APP_NAME')}}</h6>
                {{-- <h6 class="font-size-12 text-uppercase ltr-sp-2 opacity-06">About {{env('APP_NAME')}}</h6> --}}

                <hr class="w-10 ml-0 mr-0">

                <p class="font-size-30 lh-16 font-weight-light text-black">{{env('APP_NAME')}} is a Complete Toolkit – The only theme covers all aspects; beautiful layouts, super customizable, blazing fast, customer first approach.</p>

            </div><!-- /.col-md-6 -->

            <div class="lqd-column col-md-5 col-md-offset-1">

                <div class="lqd-parallax-images-4 text-md-right">

                    <div class="liquid-counter liquid-counter-default liquid-counter-lg2 mb-0">
                        <p class="font-size-30 mb-0">Since</p>
                        <div class="liquid-counter-element font-weight-normal counter-animated" data-enable-counter="true" data-counter-options="{&quot;targetNumber&quot;:&quot;2019&quot;,&quot;blurEffect&quot;:true}">
                            <span><span class="liquid-counter-animator"><span class="liquid-animator-value">2</span><div class="liquid-animator-numbers" data-value="2"><ul style="transform: translateY(-20%);"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></div></span><span class="liquid-counter-animator"><span class="liquid-animator-value">0</span><div class="liquid-animator-numbers" data-value="0"><ul style="transform: translateY(0%);"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></div></span><span class="liquid-counter-animator"><span class="liquid-animator-value">1</span><div class="liquid-animator-numbers" data-value="1"><ul style="transform: translateY(-10%);"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></div></span><span class="liquid-counter-animator"><span class="liquid-animator-value">9</span><div class="liquid-animator-numbers" data-value="9"><ul style="transform: translateY(-90%);"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></div></span></span>
                        </div><!-- /.liquid-counter-element -->
                    </div><!-- /.liquid-counter -->

                    <div class="liquid-img-group-container">
                        <div class="liquid-img-group-inner">
                            <div class="liquid-img-group-single block-revealer element-uncovered revealing-ended" data-reveal="true" data-reveal-options="{ &quot;direction&quot;:&quot;tb&quot;, &quot;bgcolor&quot;:&quot;rgb(41, 45, 53)&quot; }"><div class="block-revealer__content">
                                <div class="liquid-img-group-img-container">
                                    <div class="ld-parallax-wrap  parallax-applied"><div class="liquid-img-container-inner" data-parallax="true" data-parallax-from="{&quot;translateY&quot;:-42}" data-parallax-to="{&quot;translateY&quot;:33}" data-parallax-options="{&quot;overflowHidden&quot;:false,&quot;easing&quot;:&quot;linear&quot;}" style="transform: translateY(0.815501px);">
                                        <figure style="opacity: 1;">
                                            <img src="{{asset('assets/web/assets/demo/misc/parallax-img-8.jpg')}}" alt="About Ave">
                                        </figure>
                                    <div class="block-revealer__element" style="transform: scaleY(0); transform-origin: 50% 100%; background: rgb(41, 45, 53); opacity: 1;"></div></div></div><!-- /.liquid-img-container-inner -->
                                </div><!-- /.liquid-img-group-img-container -->
                            </div></div><!-- /.liquid-img-group-single -->
                        </div><!-- /.liquid-img-group-inner -->
                    </div><!-- /.liquid-img-group-container -->

                    <div class="liquid-img-group-container">
                        <div class="liquid-img-group-inner">
                            <div class="liquid-img-group-single block-revealer element-uncovered revealing-ended" data-reveal="true" data-reveal-options="{&quot;direction&quot;:&quot;rl&quot;, &quot;bgcolor&quot;:&quot;rgb(41, 45, 53)&quot;}"><div class="block-revealer__content">
                                <div class="liquid-img-group-img-container">
                                    <div class="ld-parallax-wrap  parallax-applied"><div class="liquid-img-container-inner will-change" data-parallax="true" data-parallax-from="{&quot;translateY&quot;:46}" data-parallax-to="{&quot;translateY&quot;:-81}" data-parallax-options="{&quot;overflowHidden&quot;:false,&quot;easing&quot;:&quot;linear&quot;}" style="transform: translateY(-10.1726px);">
                                        <figure style="opacity: 1;">
                                            <img src="{{asset('assets/web/assets/demo/misc/parallax-img-9.jpg')}}" alt="About Ave">
                                        </figure>
                                    <div class="block-revealer__element" style="transform: scaleX(0); transform-origin: 0px 50%; background: rgb(41, 45, 53); opacity: 1;"></div></div></div><!-- /.liquid-img-container-inner -->
                                </div><!-- /.liquid-img-group-img-container -->
                            </div></div><!-- /.liquid-img-group-single -->
                        </div><!-- /.liquid-img-group-inner -->
                    </div><!-- /.liquid-img-group-container -->
                    
                </div><!-- /.lqd-parallax-images-4 -->

            </div><!-- /.col-md-5 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="vc_row pt-50 pb-50">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-6">

                <h3>What We Do</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            </div><!-- /.col-md-6 -->

            <div class="lqd-column col-md-6">

                <h3>Our People</h3>
                <p>Ave employs the majority of whom are based on project sites. We embrace holistic development and support for employees with the aim of being a first-choice employer within our sectors.</p>

            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
