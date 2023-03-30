<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3ed2a7">

    <link rel="shortcut icon" href="./favicon.png" />

    <title>{{ env('APP_NAME') }} | @yield('page-title')</title>

    <link rel="stylesheet" href="https://use.typekit.net/scc6wwx.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/web/assets/vendors/liquid-icon/liquid-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/theme-vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/themes/seo.css') }}" />
	<!-- Head Libs -->
    <script async src="{{ asset('assets/web/assets/vendors/modernizr.min.js') }}"></script>
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<style>
    .mainbar-container {
        border-bottom: 1px solid #00000014;
    }
	.alert {
		border: 0;
		border-radius: 0.35rem;
		color: #fff;
		padding-top: 0.9rem;
		padding-bottom: 0.9rem;
		position: relative;
		padding-left: 10px;
	}

	.alert.alert-danger {
		background-color: rgba(238, 37, 88, 0.8);
	}
	.alert.alert-success {
		background-color: hsl(125deg 64.54% 41.83% / 90.2%);
	}
	.text-danger{
		color: rgb(185, 27, 27)
	}
    .fixed-product-image{
        display: flex;
        align-items: center;
        height: 250px;
        width: 250px;
    }

    .flex-item-align-center{
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .pf-details-pull-right .ld-pf-details {
           margin-left: unset;
    }

    
.navbar-brand {
    padding: 30px 30px;
}

.ellipse-text-css{
    white-space: nowrap;
    width: 220px;
    overflow: hidden;
    text-overflow: ellipsis;
}
    
</style>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern"
    data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">

    <div id="wrap">
        <header class="main-header">

            <div class="lqd-sticky-placeholder hide" style="height: 67.0156px;"></div>
            <div class="mainbar-wrap">
                <div class="megamenu-hover-bg" style="background-color: rgb(255, 255, 255);"></div>
                <!-- /.megamenu-hover-bg -->
                <div class="container-fluid mainbar-container">
                    <div class="mainbar">
                        <div class="row mainbar-row align-items-lg-stretch">

                            <div class="col">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{route('home')}}" rel="home">
                                        <span class="navbar-brand-inner">
                                            <img class="logo-dark" style="height:50px;"
                                                src="{{ asset('assets/logo-light.png') }}"
                                                srcset="{{ asset('assets/logo-light.png') }}"
                                                alt="{{ env('APP_NAME') }}">
                                            <img class="logo-light" style="height:50px;"
                                                src="{{ asset('assets/logo-dark.png') }}"
                                                srcset="{{ asset('assets/logo-dark.png') }}"
                                                alt="{{ env('APP_NAME') }}">
                                            <img class="logo-sticky" style="height:50px;"
                                                src="{{ asset('assets/logo-dark.png') }}"
                                                srcset="{{ asset('assets/logo-dark.png') }}"
                                                alt="{{ env('APP_NAME') }}">
                                            <img class="mobile-logo-default" style="height:50px;"
                                                src="{{ asset('assets/logo-dark.png') }}"
                                                srcset="{{ asset('assets/logo-dark.png') }}"
                                                alt="{{ env('APP_NAME') }}">
                                            <img class="logo-default" style="height:50px;"
                                                src="{{ asset('assets/logo-dark.png') }}"
                                                srcset="{{ asset('assets/logo-dark.png') }}"
                                                alt="{{ env('APP_NAME') }}">
                                        </span>
                                    </a>
                                    <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile"
                                        data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false"
                                        data-changeclassnames="{ &quot;html&quot;: &quot;mobile-nav-activated overflow-hidden&quot; }">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="bars">
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                        </span>
                                    </button>
                                </div><!-- /.navbar-header -->
                            </div><!-- /.col -->

                            <div class="col">

                                <div class="collapse navbar-collapse" id="main-header-collapse" aria-expanded="false">

                                    <ul id="primary-nav"
                                        class="main-nav nav align-items-lg-stretch justify-content-lg-center"
                                        data-submenu-options="{ &quot;toggleType&quot;:&quot;fade&quot;, &quot;handler&quot;:&quot;mouse-in-out&quot; }">

                                        <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">
                                                        Home 
                                                        <span class="submenu-expander">
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="{{Request::is('about-us') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">
                                                        About Us
                                                        <span class="submenu-expander">
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="{{Request::is('products') || Request::is('products/') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('products') }}">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">
                                                        Products
                                                        <span class="submenu-expander">
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="{{Request::is('contact-us') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}">
                                                <span class="link-icon"></span>
                                                <span class="link-txt">
                                                    <span class="link-ext"></span>
                                                    <span class="txt">
                                                        Contact Us
                                                        <span class="submenu-expander">
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>


                                    </ul><!-- /#primary-nav  -->

                                </div><!-- /#main-header-collapse -->

                            </div><!-- /.col -->

                            <div class="col text-right">

                                {{-- <div class="header-module">
									<div class="ld-dropdown-menu ld-dropdown-yenu-underlined">
										<span class="ld-module-trigger collapsed font-size-13 text-uppercase font-weight-bold ltr-sp-175" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="#shop-lang-dropdown" aria-controls="shop-lang-dropdown" aria-expanded="false">
											<span class="ld-module-trigger-txt">US <i class="fa fa-angle-down"></i></span>
										</span>
										<div class="ld-module-dropdown collapse right" id="shop-lang-dropdown" aria-expanded="false" role="list" style="">
											<div class="ld-dropdown-menu-content">
												<ul>
													<li><a href="#" target="_blank">FR</a></li>
													<li><a href="#" target="_blank">IT</a></li>
												</ul>
											</div><!-- /.ld-dropdown-menu-content -->
										</div><!-- /.ld-module-dropdown -->
									</div><!-- /.ld-dropdown-menu -->
								</div><!-- /.header-module --> --}}

                                {{-- <div class="header-module">
									<div class="ld-module-cart">
										
										<span class="ld-module-trigger collapsed" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="#shop-cart" aria-controls="shop-cart" aria-expanded="false">
											<span class="ld-module-trigger-icon">
												<i class="icon-ld-cart"></i>
											</span><!-- /.ld-module-trigger-icon --> 
											<span class="ld-module-trigger-count">2</span>
										</span><!-- /.ld-module-trigger -->
										
										<div class="ld-module-dropdown collapse" id="shop-cart" aria-expanded="false" role="list" style="">
											
											<div class="ld-cart-contents">
												
												<div class="ld-cart-head hidden">
													<span class="font-weight-bold text-uppercase ltr-sp-175">Your cart <span class="color-primary">2</span></span>
												</div><!-- /.ld-cart-head -->
												
												<div class="ld-cart-products">
													
													<div class="ld-cart-product">
														<a href="#" class="ld-cart-product-remove remove"><i class="icon-ion-ios-close"></i></a>
														<div class="ld-cart-product-info">
															<a href="#">
																<figure>
																	<img src="assets/demo/shop/cart/cart-product-1.jpg" alt="Cart Product">
																</figure>
																<span class="ld-cart-product-details">
																	<span class="ld-cart-product-name">Scalloped Dress</span>
																	<span class="ld-cart-product-extra">
																		<span>Size: XL</span>
																	</span>
																	<span class="ld-cart-product-price">
																		<span>$139.90</span>
																		<span class="ld-cart-product-quantity">x1</span>
																	</span><!-- /.ld-cart-product-price -->
																</span><!-- /.ld-cart-product-details -->
															</a>
														</div><!-- /.ld-cart-product-info -->
													</div><!-- /.ld-cart-product -->
													
													<div class="ld-cart-product">
														<a href="#" class="ld-cart-product-remove remove"><i class="icon-ion-ios-close"></i></a>
														<div class="ld-cart-product-info">
															<a href="#">
																<figure>
																	<img src="assets/demo/shop/cart/cart-product-1.jpg" alt="Cart Product">
																</figure>
																<span class="ld-cart-product-details">
																	<span class="ld-cart-product-name">Scalloped Dress</span>
																	<span class="ld-cart-product-extra">
																		<span>Size: XL</span>
																	</span>
																	<span class="ld-cart-product-price">
																		<span>$139.90</span>
																		<span class="ld-cart-product-quantity">x1</span>
																	</span><!-- /.ld-cart-product-price -->
																</span><!-- /.ld-cart-product-details -->
															</a>
														</div><!-- /.ld-cart-product-info -->
													</div><!-- /.ld-cart-product -->
													
												</div><!-- /.ld-cart-products -->
												
												<div class="ld-cart-foot">
													<div class="ld-cart-total">
														<span class="ld-cart-total-label font-weight-bold text-uppercase ltr-sp-175">Subtotal</span>
														<span class="ld-cart-total-price color-primary">$139.90</span>
													</div><!-- /.ld-cart-total -->
													<div class="ld-cart-button">
														<a href="#" class="btn btn-lg btn-solid text-uppercase ltr-sp-175">
															<span>
																<span class="btn-txt">Checkout</span>
																<span class="btn-icon"><i class="fa fa-angle-right"></i></span>
															</span>
														</a>
														<a href="#" class="btn btn-lg btn-naked text-uppercase ltr-sp-175">
															<span>
																<span class="btn-txt">View Cart</span>
																<span class="btn-icon"><i class="fa fa-angle-right"></i></span>
															</span>
														</a>
													</div><!-- /.ld-cart-button -->
												</div><!-- /.ld-cart-foot -->
									
												<div class="ld-cart-message">
													<p>Free Delivery on orders over </p>
												</div><!-- /.ld-cart-message -->
												
											</div><!-- /.ld-cart-contents -->
											
										</div><!-- /.ld-module-dropdown -->
										
									</div><!-- /.module-cart -->
								</div><!-- /.header-module --> --}}

                                {{-- <div class="header-module">
									<div class="ld-module-search">
										<span class="ld-module-trigger collapsed" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="#search-1" aria-controls="search-1" aria-expanded="false">
											<span class="ld-module-trigger-icon">
												<i class="icon-ld-search"></i>
											</span>
										</span>
										<div role="search" class="ld-module-dropdown collapse" id="search-1" aria-expanded="false" style="">
											<div class="ld-search-form-container">
												<form role="search" method="get" action="#" class="ld-search-form">
													<input type="search" placeholder="Start searching" value="" name="s">
													<span role="search" class="input-icon collapsed" data-ld-toggle="true" data-toggle="collapse" data-target="#search-1" aria-controls="search-1" aria-expanded="false"><i class="icon-ld-search"></i></span>
												</form>
											</div>
										</div><!-- /.ld-module-dropdown -->
									</div><!-- /.ld-module-search -->
								</div><!-- /.header-module --> --}}

                            </div><!-- /.col -->

                        </div><!-- /.mainbar-row -->
                    </div><!-- /.mainbar -->
                </div><!-- /.mainbar-container -->
            </div><!-- /.mainbar-wrap -->

        </header>




        <main id="content" class="content">
