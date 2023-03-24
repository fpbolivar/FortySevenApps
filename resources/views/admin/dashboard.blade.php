@extends('admin.layouts.main')
@section('page-title', 'Dashboard')
@section('content')
<!-- Main Content -->
<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('page-title')</h2>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon domains">
                        <div class="body">
                            <a class="text-decoration-none text-dark"  href="{{route('admin.apps')}}">
                                <h6>Apps</h6>
                                <h2>{{$totalApps}}</h2>
                                <small>Total Apps</small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <a class="text-decoration-none text-dark"  href="{{route('admin.contacts')}}">
                                <h6>Contacts</h6>
                                <h2>{{$totalContact}}</h2>
                                <small>Total Contacts</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Content -->
@endsection