@extends('admin.layouts.main')
@section('content')
@section('page-title', 'Edit App')
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
                            <form id="validateForm" action="{{route('admin.app.update',[$edit->id])}}" method="POST" enctype='multipart/form-data' >
                            	@csrf
                                @include('admin.layouts.message')
                            	<div class="row multipleImages">
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Admin Email</label>
                                        <input type="text" class="form-control" placeholder="App Email" name="app_email" value="{{old('app_email',$edit->app_email)}}">
                                        {!! $errors->first('app_email', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Admin Password</label>
                                        <input type="text" class="form-control" placeholder="App Password" name="app_password" value="{{old('app_password',$edit->app_password)}}">
                                        {!! $errors->first('app_password', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-12 col-sm-12">
                                        <label class="form-label">App Auth Url <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Auth Url" name="app_auth_url" value="{{old('app_auth_url',$edit->app_auth_url)}}">
                                        {!! $errors->first('app_auth_url', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">App Name <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Name" name="name" required value="{{old('name',$edit->name)}}">
                                        {!! $errors->first('name', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                                        
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">Ratings <span class="help-block text text-danger">*</span></label>
                                        <input type="number" min="1" max="5" class="form-control" placeholder="Ratings" name="ratings" required value="{{old('ratings',$edit->ratings)}}">
                                        {!! $errors->first('ratings', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">No Of Reviews <span class="help-block text text-danger">*</span></label>
                                        <input type="number" min="0" class="form-control input-numeric" placeholder="No Of Reviews" name="no_of_reviews" required value="{{old('no_of_reviews',$edit->no_of_reviews)}}">
                                        {!! $errors->first('no_of_reviews', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">Play Store Link <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Play Store Link" name="play_store_link" required value="{{old('play_store_link',$edit->play_store_link)}}">
                                        {!! $errors->first('play_store_link', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-4 col-sm-12">
                                        <label class="form-label">App Store Link <span class="help-block text text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="App Store Link" name="app_store_link" required value="{{old('app_store_link',$edit->app_store_link)}}">
                                        {!! $errors->first('app_store_link', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12">
                                        <label class="form-label">Description <span class="help-block text text-danger">*</span></label>
                                        <textarea rows="9" type="text" class="ckeditor form-control" placeholder="Description" name="description" required >{!!old('description',$edit->description)!!}</textarea>
                                        {!! $errors->first('description', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
                                    <div class="form-group form-float col-md-6 col-sm-12 app-logo">
                                        <label class="form-label">App Logo ( 250*250 ) <span class="help-block text text-danger">*</span></label>
                                        <input name="logo" type="file" class="dropifySingle" data-default-id="{{$edit->id}}" data-default-file="{{$edit->logo}}" data-allowed-file-extensions="jpeg jpg png">
                                        {!! $errors->first('logo', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                                    </div>
									<div class="form-group form-float col-md-12 col-sm-12">
										<label class="form-label">App Images ( 750*1624 ) <span class="help-block text text-danger">*</span>
											<a title="Add" class="btn btn-success btn-sm" style="color: white" data-toggle="tooltip" id="addImage">Add</a>
										</label>
									</div>
									@if (count($edit->images))
										@for ($i = 0; $i < count($edit->images); $i++)
											@if ($i == 0)
												<div class="form-group form-float float-left col-md-3 col-sm-12 image">
													<input id="image-preview" name="images[]" type="file" class="dropifyMultiple" data-default-id="{{$edit->images[$i]->id}}" data-default-file="{{$edit->images[$i]->image}}" data-allowed-file-extensions="jpeg jpg png">
													@error('image')
														<span class="help-block  text text-danger">{{ $message }}</span>
													@enderror
												</div>
											@else
												<div class='form-group float-left form-float col-md-3 col-sm-12 image '>
													<a class='btn bg-danger btn-sm absolute text-white delete-image delete_Data delete-absolute' data-type="image" data-delete-id="{{$edit->images[$i]->id}}">Delete</a>
													<input accept=""  name='images[]' type='file' class='dropifyMultiple' data-default-id="{{$edit->images[$i]->id}}" data-default-file='{{$edit->images[$i]->image}}' data-allowed-file-extensions='jpeg jpg png'>
												</div>
											@endif
										@endfor
									@else
										<div class="form-group form-float float-left col-md-3 col-sm-12 image">
											<input id="image-preview" name="images[]" type="file" class="dropifyMultiple"
												data-default-file="" data-allowed-file-extensions="jpeg jpg png">
											@error('image')
												<span class="help-block  text text-danger">{{ $message }}</span>
											@enderror
										</div>
									@endif
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
        let drMulEvent = $('.dropifyMultiple').dropify();
        let drSinEvent = $('.dropifySingle').dropify();
		
		drMulEvent.on('dropify.beforeClear', function(event, element){
            if(confirm("Do you really want to delete \"" + element.file.name + "\" ?")){
                let imageId = element.settings.defaultId;
                deleteFile('image',imageId);
                return true;
            }
            return false;

		});
        drMulEvent.on('dropify.afterClear', function(event, element){
			alert('File deleted');
		});
        
        function deleteFile(type,id) {
            try {
                let url = '{{route('admin.app.image.delete')}}'
                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: 'POST',
                    data: {"type":type,"id":id,"_token":"{{ csrf_token() }}"},
                    success: function(response){
                        console.log(response);
                        return true
                    },
                    error: function( error){
                        console.log(error);
                        return false
                    }
                });
            } catch (error) {
                return false
            }
        }

		

		drSinEvent.on('dropify.beforeClear', function(event, element){
			if(confirm("Do you really want to delete \"" + element.file.name + "\" ?")){
                let imageId = element.settings.defaultId;
                deleteFile('logo',imageId);
                return true;
            }
            return false;
		});

		drSinEvent.on('dropify.afterClear', function(event, element){
			alert('File deleted');
		});

		
        $(document).ready(function() {
			// append image
            $("#addImage").on("click", function() {
                $(".multipleImages").append(
                    "<div class='form-group float-left form-float col-md-3 col-sm-12 image '><a class='btn bg-danger btn-sm absolute text-white delete-image delete_Data delete-absolute'>Delete</a><input required name='images[]' type='file' class='dropifyMultiple' data-default-file='' data-allowed-file-extensions='jpeg jpg png'></div>"
                );
                $('.dropifyMultiple').dropify();
            });
            $("div").delegate(".delete_Data", "click", function(e){
                if($(this).data('type') && $(this).data('delete-id')){
                    deleteFile($(this).data('type'),$(this).data('delete-id'));
                }
                this.parentNode.remove();
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
        $('.dropify-render').each(function() {
            if (!$(this).html()) {
                image = false
            }
        })
        if (!image) {
            $('.image-validate').html('This field is required')
            error = true
        } else {
            $('.image-validate').html('')
        }
        if (error) {
            return false
        } else {
            return true
        }
    }

    </script>
@endsection