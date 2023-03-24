
<!-- Jquery Core Js --> 
<script src="{{asset('assets/admin/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{asset('assets/admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('assets/admin/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/admin/assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets/admin/assets/bundles/c3.bundle.js')}}"></script>

<script src="{{asset('assets/admin/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/pages/index.js')}}"></script>

<script src="{{asset('assets/admin/assets/plugins/jquery-validation/jquery.validate.js')}}"></script> <!-- Jquery Validation Plugin Css --> 

<script src="{{asset('assets/admin/assets/js/pages/forms/form-validation.js')}}"></script> 

<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/admin/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<!-- Data table --> 
<script src="{{asset('assets/admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
<!-- Select2 Js -->
<script src="{{asset('assets/admin/assets/plugins/dropify/js/dropify.min.js')}}"></script>

<script src="{{asset('assets/admin/assets/js/pages/forms/dropify.js')}}"></script>

<script src="{{asset('assets/admin/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

<script src="{{asset('assets/admin/assets/plugins/select2/select2.min.js')}}"></script>

<script src="{{asset('assets/admin/assets/js/pages/forms/advanced-form-elements.js')}}"></script>

<script src="{{asset('assets/admin/assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>

<script src="{{asset('assets/admin/assets/js/pages/medias/image-gallery.js')}}"></script>	

</body>

@yield('js')

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