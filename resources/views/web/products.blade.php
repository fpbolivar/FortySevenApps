@extends('web.layouts.main')
@section('page-title', 'Products')
@section('content')
    <section id="services" class="vc_row pt-30 pb-30 bg-no-repeat bg-gray"
        style="background-image: url(./assets/demo/bg/bg-77.svg); background-position: 500% 0%;">
        {{-- <div class="container">
        @if ($products && count($products))
        <div class="lqd-space visible-lg visible-md- mb-50"></div>

        <div id="works" class="row">

            <div class="lqd-column col-md-12">

                <div class="liquid-portfolio-list">

                    <div class="row d-flex flex-wrap align-items-end mb-40">
                        <div class="col-md-6">
                            <header class="fancy-title mb-0">
                                <h6 class="text-uppercase">Products</h6>
                                <h2><strong>Latest</strong> Apps</h2>
                            </header>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                        
                    <div class="row liquid-portfolio-list-row" data-liquid-masonry="true"
                    data-masonry-options='{ "filtersID": "#seo-pf-grid" }' data-custom-animations="true"
                    data-ca-options='{"triggerHandler":"inview","animationTarget":".ld-pf-item","animateTargetsWhenVisible":"true","duration":"1600","delay":"160","easing":"easeOutQuint","initValues":{"translateY":65,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                        @foreach ($products as $product)
                            <div
                                class="col-md-3 col-sm-4 col-xs-12 masonry-item branding digital-design grid-hover-overlay">
                                <article
                                    class="ld-pf-item ld-pf-dark pf-bg-shadow pf-details-visible pf-details-boxed pf-details-pull-right pf-details-pull-up-half title-size-24 pf-details-h-str pf-details-v-end post-2021 liquid-portfolio type-liquid-portfolio status-publish format-gallery has-post-thumbnail hentry post_format-post-format-gallery liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-grid-hover-overlay">
                                    <div class="ld-pf-inner" style="display: flex;flex-direction: column;align-items: center;">
                                        <div class="ld-pf-image fixed-product-image">
                                            <img src="{!! asset($product->logo ? $product->logo : 'assets/web/assets/demo/portfolio/pf-56.jpg') !!}" alt="Oblivision" />
                                        </div><!-- /.ld-pf-image -->
                                        <div class="ld-pf-details py-3">
                                            <div class="ld-pf-bg" style="background-color: #fff;"
                                                data-custom-animations="true"
                                                data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": "this", "easing": "easeInOutCirc", "duration": 850, "offDuration": 700, "initValues": { "translateY": 0 }, "animations": { "translateY": -70 } }'>
                                            </div>
                                            <div class="ld-pf-details-inner" data-custom-animations="true"
                                                data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "easing": "easeOutQuint", "duration": 850, "offDuration": 750, "startDelay": 280, "offDelay": 280, "delay": 60, "initValues": { "translateY": 0 }, "animations": { "translateY": -70 } }'>
                                                <h3 class="h4" data-split-text="true"
                                                    data-split-options='{ "type": "lines" }'>{!! ucfirst(Str::limit($product->name, 11)) !!}</h3>
                                                <p data-split-text="true" data-split-options='{ "type": "lines" }'>{!! ucfirst(Str::limit($product->description, 15)) !!}</p>
                                            </div>
                                        </div>
                                        <a href="{{route('single.product',[$product->id])}}" class="liquid-overlay-link"></a>
                                    </div><!-- /.ld-pf-inner -->
                                </article>
                            </div><!-- /.col-md-4 -->
                        @endforeach
                    </div><!-- /.row -->
                    
                </div><!-- /.liquid-portfolio-list -->

            </div><!-- /.lqd-column col-md-12 -->

        </div><!-- /.row -->
        @endif

    </div><!-- /.container --> --}}

            <div class="container">
                <div class="row d-flex flex-wrap align-items-end mb-40">
                    <div class="col-md-6">
                        <header class="fancy-title mb-0">
                            <h6 class="text-uppercase">Products</h6>
                            <h2><strong>Latest</strong> Apps</h2>
                        </header>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                <div class="row">
                    @forelse ($products as $product)
                        <a href="{{ route('single.product', [$product->id]) }}">
                            <div class="lqd-column col-md-3 col-sm-6">

                                <div class="fancy-box fancy-box-classes fancy-box-heading-sm flex-item-align-center">

                                    <figure class="fancy-box-image fixed-product-image">
                                        <img src="{!! asset($product->logo ? $product->logo : 'assets/web/assets/demo/misc/carousel-item-4.jpg') !!}">
                                    </figure>

                                    <div class="fancy-box-contents">

                                        <div class="fancy-box-info">
                                            <h3 class="font-weight-semibold">{!! ucfirst(Str::limit($product->name, 20)) !!}</h3>
                                        </div><!-- /.fancy-box-info -->

                                    </div><!-- /.fancy-box-contents -->

                                </div><!-- /.fancy-box fancy-box-classes -->
                            </div><!-- /.lqd-column col-md-3 -->
                        </a>
                    @empty
                    <div class="lqd-column col-md-12 col-sm-12 mb-50 text-center">
                        <h2 class="lh-1 mb-0 mt-0 lqd-unit-animation-done" data-fittext="true" data-fittext-options="{&quot;compressor&quot;:0.65, &quot;maxFontSize&quot;:&quot;72&quot;, &quot;minFontSize&quot;:&quot;48&quot;}" style="font-size: 70.4615px; transform: translateY(0px); opacity: 1;">
                            <strong>No Apps Found</strong>
                        </h2>
                    </div>
                    @endforelse
                </div><!-- /.row -->
            </div>
    </section><!-- /.vc_row pt-90 pb-90 -->


@endsection
