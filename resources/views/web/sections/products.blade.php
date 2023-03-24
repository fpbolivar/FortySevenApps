@php
    use Illuminate\Support\Str;
@endphp
<section id="services" class="vc_row pt-30 pb-30 bg-no-repeat"
    style="background-image: url(./assets/demo/bg/bg-77.svg); background-position: 500% 0%;">
    @if ($products && count($products))
        <div class="container">
            <div class="row d-flex flex-wrap align-items-end mb-40">
                <div class="col-md-6">
                    <header class="fancy-title mb-0">
                        <h6 class="text-uppercase">Products</h6>
                        <h2><strong>Latest</strong> Apps</h2>
                    </header>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="liquid-filter-items align-items-center justify-content-end mb-10">
                        <div class="liquid-filter-items-inner">
                            <ul class="filter-list filter-list-inline size-sm text-uppercase ltr-sp-1" id="seo-pf-grid">
                                <li class="active" data-filter="*">
                                    @if ($count > 4)
                                        <h6><a href="{{ route('products') }}">view more</a></h6>
                                    @endif
                                </li>
                            </ul>
                        </div><!-- /.liquid-filter-items-inner -->
                    </div><!-- /.liquid-filter-items -->
                </div>
            </div><!-- /.row -->
            <div class="row">
                @foreach ($products as $product)
                    <a href="{{ route('single.product', [$product->id]) }}">
                        <div class="lqd-column col-md-3 col-sm-6">

                            <div class="fancy-box fancy-box-classes fancy-box-heading-sm flex-item-align-center">

                                <figure class="fancy-box-image fixed-product-image">
                                    <img src="{!! asset($product->logo ? $product->logo : 'assets/web/assets/demo/misc/carousel-item-4.jpg') !!}">
                                </figure>

                                <div class="fancy-box-contents">

                                    <div class="fancy-box-info">
                                        <h3 class="font-weight-semibold">{!! ucfirst(Str::limit($product->name, 20)) !!}</h3>
                                        <div class="trainer ellipse-text-css">    
                                            {{-- {!! ucfirst($product->description) !!} --}}
                                        </div>
                                    </div><!-- /.fancy-box-info -->

                                </div><!-- /.fancy-box-contents -->

                            </div><!-- /.fancy-box fancy-box-classes -->

                        </div><!-- /.lqd-column col-md-3 -->
                    </a>
                @endforeach

            </div><!-- /.row -->
        </div>
    @endif
</section><!-- /.vc_row pt-90 pb-90 -->
