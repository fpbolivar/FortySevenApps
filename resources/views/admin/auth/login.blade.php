<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>{{ config('app.name', 'Forty seven app') }} | Sign In</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.min.css')}}">  
<style>
    .cursor-pointer {
        cursor: pointer;
    }
</style>  
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form action="{{route('admin.login.authenticate')}}" method="POST" class="card auth_form">
                    @csrf
                    <div class="header">
                        <img class="logo" style="width: 200px;" src="{{asset('assets/logo-fsa.png')}}" alt="">
                        <h5>Log in</h5>
                    </div>
                    @include('admin.layouts.message')
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            {!! $errors->first('email', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">                                
                                <span toggle="#toggle-password" onclick="showHidePassword('#password', this)" class="input-group-text cursor-pointer"><i class="zmdi zmdi-eye"></i></span>
                            </div>
                            {!! $errors->first('password', '<div class="col-md-12 px-0"><span class="help-block text text-danger">:message</span></div>') !!}                            
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" name="remember" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>                        
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>{{ config('app.name', 'Forty seven app') }}</span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/admin/assets/images/signin.svg')}}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/admin/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script>
    //START: Password Eye Button
    function showHidePassword(parent, child) {
        // .children
        let input = $(parent);
        if (input.attr("type") === "password") {
            input.attr("type", "text");
            $(child).children("i").removeClass("zmdi zmdi-eye").addClass("zmdi zmdi-eye-off");
        } else {
            input.attr("type", "password");
            $(child).children("i").removeClass("zmdi zmdi-eye-off").addClass("zmdi zmdi-eye");
        }
    }
    //END: Password Eye Button

    // START: input number
    $(".input-numeric").keypress(function(e) {
    if ((e.which < 48 || e.which > 57)) {
        $(this).siblings('div').html('Only digits can be entered.');
    }
    else {
        $(this).siblings('div').html('');
    }
    return /[0-9]/i.test(e.key);
}); //END: input number
</script>
</body>

</html>