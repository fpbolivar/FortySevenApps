<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>{{ config('app.name', 'Forty Seven App') }} | @yield('page-title')</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/charts-c3/plugin.css')}}" />

<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/morrisjs/morris.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/dropify/css/dropify.min.css')}}">
<!-- Multi Select Css -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/multi-select/css/multi-select.css')}}">
<!-- Bootstrap Select Css -->
<link href="{{asset('assets/admin/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/select2/select2.css')}}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.min.css')}}" />
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" />
<script src="{{asset('assets/admin/assets/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor --> 
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/light-gallery/css/lightgallery.css')}}">
<style>
    .rating-index label .icon i {
        font-size: 20px;
    }
    .rating-index label .icon .filled-icon {
        color: #ecec43;
    }
    .social-icon-color {
        color: #090909;
    }

    .social-icon-font-size {
        font-size: 30px;
    }
</style>
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/admin/assets/images/loader.svg')}}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
