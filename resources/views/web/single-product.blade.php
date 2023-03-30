@extends('web.layouts.main')
@section('page-title'){!! $data ? ucfirst($data->name) : 'No Product' !!}@endsection
@section('content')
    <div class="titlebar scheme-light text-center bg-cover" style="background-image: url(./assets/demo/bg/bg-105.jpg)">
        <div class="titlebar-inner pt-60 pb-40">
            <div class="container titlebar-container">
                <div class="row titlebar-container">
                    <div class="titlebar-col col-md-12">
                        <h1 style="font-size: 40px;">{!! $data ?  ucfirst(Str::limit($data->name,60)) : "No App Found" !!}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 67px;"></div>
    </div>

	
	@if (!is_null($data))
		
	
    <section id="services" class="vc_row pt-30 pb-20 bg-no-repeat"
        style="background-image: url(./assets/demo/bg/bg-77.svg); background-position: 500% 0%;">

        <div class="container">

            <div class="col-md-12">
				<div class="col-md-12" style="justify-content: center;display: flex;">
					<figure class="fancy-box-image fixed-product-image">
						<img src="{!! asset($data->logo ? $data->logo : 'assets/web/assets/demo/misc/carousel-item-4.jpg') !!}">
					</figure>
				</div>
				<div class="blog-single-content">
					<hr/>
					<p class="add-dropcap">
						{!! ucfirst($data->description) !!}					
					</p>
					
				<footer class="blog-single-footer entry-footer" style="align-items: center;">
					
					<span class="tags-links">
						<a rel="tag">Ratings ({{$data->ratings ?? 0}})</a>
						<a rel="tag">No Of Reviews ({{$data->no_of_reviews  ?? 0}})</a>
					</span>
					
					<span class="share-links">
						{{-- <span class="text-uppercase ltr-sp-1">Download From</span> --}}
						<ul class="social-icon">
							<li>
								<a target="_blank" href="{{$data->app_store_link ?? "#"}}">
									<img style="height: 50px;" src="{{asset('assets/appstore.png')}}" alt="appstore">
								</a>
							</li>
							<li>
								<a target="_blank" href="{{$data->play_store_link ?? "#"}}">
									<img style="height: 50px;" src="{{asset('assets/playstore.png')}}" alt="playstore">
								</a>
							</li>
						</ul><!-- /.social-icon -->
					</span><!-- /.share-links -->
					
				</footer><!-- /.blog-single-footer entry-footer -->
			</div>
			
        </div>
    </section><!-- /.vc_row pt-90 pb-90 -->
	@if ($data->images && count($data->images))
		<section class="vc_row pt-20 pb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="lqd-column col-md-12 mb-4">
						<header class="fancy-title text-center">
							<h2>Gallery</h2>
						</header>
					</div><!-- /.lqd-column col-md-12 -->
				</div>
				<div class="row">

					<div class="lqd-column col-md-12">

						<div class="ld-carousel-phone ld-carousel-phone-style-2">

							<div class="ld-carousel-phone-inner">
							
								<div class="mockup-container">
									<div class="mockup-inner">
										<figure class="text-center">
											<img src="{{asset('assets/web/assets/img/mockups/phone/mockup-1.png')}}" alt="Phone">
										</figure>
									</div><!-- /.mockup-inner -->
								</div><!-- /.mockup-container -->
						
								<div class="mockup-content-container">
									<div class="mockup-content-inner">
						
										<div class="carousel-container carousel-nav-floated carousel-nav-middle carousel-nav-bordered carousel-nav-circle carousel-nav-sm">
						
											<div class="carousel-items row" data-lqd-flickity='{ "groupCells": false, "wrapAround": true, "cellAlign": "center" }'>
										
												@foreach ($data->images as $image)
													<div class="carousel-item col-xs-12">
														<img src="{{asset( $image->image ? $image->image : 'assets/web/assets/demo/misc/screen-3.jpg')}}" alt="{{$image->name}}">
													</div><!-- /.carousel-item -->
												@endforeach
										
											</div><!-- /.carousel-items row -->
										
										</div><!-- /.carousel-container -->					
						
									</div><!-- /.mockup-content-inner -->
								</div><!-- /.mockup-content-container -->
						
							</div><!-- /.ld-carousel-laptop-inner -->
						
						</div><!-- /.ld-carousel-laptop ld-carousel-laptop-style-1 -->

					</div><!-- /.lqd-column col-md-12 -->

				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
	@endif
	@endif
@endsection
