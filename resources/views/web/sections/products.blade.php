@php
    use Illuminate\Support\Str;
@endphp
<link rel="stylesheet" type="text/css" href="{{asset('assets/web/slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/web/slick/slick-theme.css')}}">
<style>
    .history .carousel2 .slick-list .slick-track {
        width: unset !important;
        transform : unset !important;
    }
    .history .carousel2 .slick-list {
        display: flex;
        justify-content: center;
    }

    .history .carousel2 .slick-list .slick-track .logo {
        width: 45px !important;
        height: 45px !important;
    }
    .app-flex{
        display: flex;
        flex-direction: column;
        padding: 15px;
        width: 295px;
    }
    .app-name{
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 5px;
    }
    .app-logo{
        height: 220px;
        width: 220px;
    }
    .history .carousel2 .slick-list .slick-track .slick-current .logo {
        width: 45px !important;
        height: 45px !important;
        transform: scale(1.75);
        border-radius: 51%;
        border: 1px solid #c8c5c5;
        background: white;
            cursor: pointer;
    }
    .history .carousel2 .slick-list .slick-track .logo {
            width: 45px !important;
    height: 45px !important;
    border-radius: 51%;
    border: 1px solid #d9d9d9;
    background: white;
    object-fit: scale-down;
    padding: 5px;
        cursor: pointer;
    }
    .history .carousel2 .slick-list{
        padding: 20px 50px !important;
    }
    .hr-tag-behind{
        content: ''; 
        position: absolute;
        top: 50%;
        left: 0;
        border-top: 3px solid #00000045;
        background: #00000045;width: 100%;
        transform: translateY(-50%);
    }
    .slider-for-app-main{
        /*display: flex;*/
        justify-content: center; 
        padding: 5px;
    }
    .slider-for-app-main .slider-for-app-sub {
        display: flex;
        height: 225px;
        /*width: 520px; */
        box-shadow: 0px 0px 5px 0px #d1cdcd;
        border-radius: 10px;
        border: solid 1px #b3b3b3;
    }
    .a-tag-app:focus {
        outline: unset !important;
        outline-offset: -2px;
    }
    .a-tag-app:hover{
        color: var(--color-link) !important;
    }
    .img-main-carusoul{
        display: flex;
        height: 225px;
        width: 225px;
            background: #dcdcdc94;
    }
    .img-main-carusoul-main{
        display: flex;
        align-items: center;
        padding: 5px;
            border-right: solid 1px #dddddd;
    }
    @media only screen and (min-width: 1024px) {
    .slider-for-app-main .slider-for-app-sub {
        width: 520px; 
        }
        .slider-for-app-main {
            display: flex;
        }
    }
</style>
<section class="vc_row pt-30 pb-30 bg-no-repeat history">
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
            <div class="row carousel">
                <div class="lqd-column col-md-12 col-sm-12">
                    <div class="slider-for">
                        @foreach ($products as $product)
                            <div>
                                <div class="slider-for-app-main">
                                    <a class="a-tag-app" href="{{ route('single.product', [$product->id]) }}">
                                    <div class="slider-for-app-sub">
                                            <div class="img-main-carusoul">
                                                <div class="img-main-carusoul-main">
                                                    <img  src="{!! asset($product->logo ? $product->logo : 'assets/web/assets/demo/misc/carousel-item-4.jpg') !!}">
                                                </div>
                                            </div>
                                            <div class="app-flex">
                                                <p class="app-name">{!! ucfirst(Str::limit($product->name, 20)) !!}</p>
                                                <p class="app-description">{!! ucfirst(Str::limit($product->description, 150)) !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row carousel2 mt-50">
                <div style="position: relative;" class=" lqd-column col-md-12 col-sm-12">
                    <div class="hr-tag-behind"></div>   
                    <div class="slider-nav">
                        @foreach ($products as $product)
                            <div>
                                <img class="logo" src="{!! asset($product->logo ? $product->logo : 'assets/web/assets/demo/misc/carousel-item-4.jpg') !!}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>

@section('js')
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{asset('assets/web/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        centerMode: true,
        slidesToScroll: 1,
        arrows: false,
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        asNavFor: '.slider-nav',
         responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

  ]
    });
    $('.slider-nav').slick({
        slidesToShow: 9,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        infinite: true,
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
</script> 
@endsection