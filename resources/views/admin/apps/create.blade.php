@extends('admin.layouts.main')
@section('content')
@section('page-title', 'Add App')
<style>
    .image {
        position: relative;
    }

    .image #image-preview-error {
        position: absolute;
        bottom: 0px;
        left: 0px;
    }

    .delete-image {
        left: 22px;
        position: absolute;
        z-index: 100;
        top: 10px;
    }
    .float-left{
        float: left;
    }

    .delete-absolute{
        position: absolute;
        top: -5px;
        left: 15px;
    }
    
    .app-logo > .dropify-wrapper {
        height: 335px !important;
    }

    .dropify-wrapper #logo-error {
        position: absolute;
        bottom: 0;
        left: 200px;
    }
    .dropify-wrapper #image-preview-error {
        position: absolute;
        bottom: 0;
        left: 55px;
    }
    

</style>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('page-title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin.dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.apps')}}"><i class="zmdi zmdi-apps"></i>Apps</a></li>
                        <li class="breadcrumb-item active">@yield('page-title')</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form id="validateForm" action="{{route('admin.app.insert')}}" method="POST" enctype='multipart/form-data' onsubmit="return validateForm()">
                            	@csrf
                                @include('admin.layouts.message')
                            	<div class="row multipleImages">
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Admin Email <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Email" name="app_email" value="{{old('app_email')}}">
                                        {!! $errors->first('app_email', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Admin Password</label>
                                        <input type="text" class="form-control" placeholder="App Password" name="app_password" value="{{old('app_password')}}">
                                        {!! $errors->first('app_password', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-12 col-sm-12">
                                        <label class="form-label">App Auth Url</label>
                                        <input type="text" class="form-control" placeholder="App Auth Url" name="app_auth_url" value="{{old('app_auth_url')}}">
                                        {!! $errors->first('app_auth_url', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Name <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Name" name="name" required value="{{old('name')}}">
                                        {!! $errors->first('name', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">Ratings <span class="help-block text text-danger">*</span></label>
                                        <input type="number" min="1" max="5" class="form-control" placeholder="Ratings" name="ratings" required value="{{old('ratings')}}">
                                        {!! $errors->first('ratings', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">No Of Reviews <span class="help-block text text-danger">*</span></label>
                                        <input type="number" min="1" class="form-control input-numeric" placeholder="No Of Reviews" name="no_of_reviews" required value="{{old('no_of_reviews')}}">
                                        {!! $errors->first('no_of_reviews', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">Play Store Link <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Play Store Link" name="play_store_link" required value="{{old('play_store_link')}}">
                                        {!! $errors->first('play_store_link', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">App Store Link <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Store Link" name="app_store_link" required value="{{old('app_store_link')}}">
                                        {!! $errors->first('app_store_link', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">Description <span class="help-block text text-danger">*</span></label>
                                        <textarea class="ckeditor form-control" rows="9" placeholder="Description" name="description" required value="{{old('description')}}"></textarea>
                                        {!! $errors->first('description', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12 app-logo">
                                        <label class="form-label">App Logo ( 250*250 ) <span class="help-block text text-danger">*</span></label>
                                        <input required name="logo" type="file" class="dropifySingle" data-default-file="" data-allowed-file-extensions="jpeg jpg png">
                                        {!! $errors->first('logo', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-12 col-sm-12">
                                        <label class="form-label">App Images  ( 750*1624 )
                                            <a title="Add" class="btn btn-success btn-sm" style="color: white" data-toggle="tooltip" id="addImage">Add</a>
                                        </label>
                                    </div>
                                    <div class="form-group form-float float-left col-md-3 col-sm-12 image">
                                        <input required id="image-preview" name="images[]" type="file" class="dropifyMultiple"
                                            data-default-file="" data-allowed-file-extensions="jpeg jpg png">
                                        @error('image')
                                            <span class="help-block  text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script type="text/javascript">
        $('.dropifyMultiple').dropify();
        $('.dropifySingle').dropify();
        $(document).ready(function() {
            $("#addImage").on("click", function() {
                $(".multipleImages").append(
                    "<div class='form-group float-left form-float col-md-3 col-sm-12 image '><a class='btn bg-danger btn-sm absolute text-white delete-image delete_Data delete-absolute'>Delete</a><input id='image-preview' required name='images[]' type='file' class='dropifyMultiple' data-default-file='' data-allowed-file-extensions='jpeg jpg png'></div>"
                );
                $('.dropifyMultiple').dropify();
                $(".delete_Data").click(function() {
                    this.parentNode.remove()
                });
            });
        });

        $("#validateForm").validate({
            errorClass: "text-danger",
            rules: {
                name: {
                    required: true,
                },
                description: {
                    required: true,
                },
                ratings: {
                    required: true,
                },
                no_of_reviews: {
                    required: true,
                },
                play_store_link: {
                    required: true,
                },
                app_store_link: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "This field is required.",
                },
                description: {
                    required: "This field is required.",
                },
                ratings: {
                    required: "This field is required.",
                },
                no_of_reviews: {
                    required: "This field is required.",
                },
                play_store_link: {
                    required: "This field is required.",
                },
                app_store_link: {
                    required: "This field is required.",
                },
            },
        });

        function validateForm() {
                let image = true
                let error = false
                $('.dropify-render').each(function(index) {
                    // logo
                    if(index == 0 ){
                        if (!$(this).html()) {
                            image = false
                        }
                    
                    }else{

                    }
                    console.log("$(e)",index);
                })

                console.log(image);
                console.log(true);
                if (!image) {
                    $('.image-validate').html('This field is required')
                    error = true
                } else {
                    $('.image-validate').html('')
                    error = false

                }
                if (error) {
                    return false
                } else {
                    return true
                }
            }
    </script>
@endsection