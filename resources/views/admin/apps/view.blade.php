@extends('admin.layouts.main')
@section('content')
@section('page-title', 'View App')
<style>
	.social-links li a {
		color: #000000;
	}

	.social-links .zmdi-hc-fw {
		width: 1em;
		text-align: center;
	}
	
	.social-links .zmdi {
		font-size: 30px;
	}
</style>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('page-title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.apps')}}"><i class="zmdi zmdi-apps"></i> Apps</a></li>
                        <li class="breadcrumb-item active">@yield('page-title')</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="#"><img src="{{$data->logo ?? ""}}" class="shadow" width="200px" alt="profile-image"></a>
                            <h4 class="m-t-10">{{$data->name ?? "N/A"}}</h4>                            
                            <div class="row">
                                @if ($data->app_qr)
                                    <div class="col-12">                                    
                                        <small>QR Code</small>
                                        <h5><img src="{{$data->app_qr}}" class="shadow" width="150px" alt="profile-image"></h5>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <ul class="social-links list-unstyled">
                                        <li><a title="play store" target="_blank" href="{{$data->play_store_link ?? "#"}}"><i class="zmdi zmdi-hc-fw"></i></a></li>
                                        <li><a title="app store" target="_blank" href="{{$data->app_store_link ?? "#"}}"><i class="zmdi zmdi-hc-fw"></i></a></li>
                                    </ul>
								</div>
                                <div class="col-6">                                    
                                    <small>Ratings</small>
									<h5>{{$data->ratings ?? 0}}</h5>
                                </div>
                                <div class="col-6">                                    
                                    <small>No Of Reviews</small>
                                    <h5>{{$data->no_of_reviews ?? 0}}</h5>
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
						<div class="header">
                            <h2><strong>Description</strong></h2>
                        </div>
                        <div class="body">
                            {!!$data->description ?? ""!!}
                        </div>
                    </div>
					@if($data->images && count($data->images))
						<div class="card">
							<div class="header">
								<h2><strong>Images</strong> Gallery</h2>
							</div>
							<div class="body">
								<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
									@forelse ($data->images as $image)
										<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="{{$image->image}}"> <img class="img-fluid img-thumbnail" src="{{$image->image}}" alt=""> </a> </div>
									@empty
										<div style="text-align: center;" >
											<h1>No Images Found</h1>
										</div>
									@endforelse
								</div>
							</div>
						</div>
					@endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection