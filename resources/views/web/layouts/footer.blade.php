</main><!-- /#content.content -->

<footer class="main-footer pt-120 pb-70">

    <section class="vc_row">
        <div class="container">
            <div class="row d-md-flex flex-wrap " style="display: flex;">

                <div class="lqd-column col-md-6 col-xs-6 mb-30">
                    <figure class="mb-10">
                        <img src="{{ asset('assets/logo-dark.png') }}" width="200px" alt="Ave Logo">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, labore.</p>
                    

                </div><!-- /.col-md-3 -->

                <div class="lqd-column col-md-2 col-xs-6 mb-30">

                    <h3 class="widget-title">Menu</h3>
                    
                    <ul class="lqd-custom-menu reset-ul font-size-14 lh-2">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>

                </div><!-- /.col-md-3 -->

                <div class="lqd-column col-md-2 col-xs-6 mb-30">

                    <h3 class="widget-title">Apps</h3>
                    @php
                        $productsData = App\Models\App::whereis_deleted('0')->orderBy('id','DESC')->limit(4)->get();
                    @endphp
                    <ul class="lqd-custom-menu reset-ul font-size-14 lh-2">
                        @forelse ($productsData as $product)
                            <li><a href="{!! route('single.product',[$product->id]) !!}">{!! ucfirst(Str::limit($product->name, 15)) !!}</a></li>
                        @empty
                            <li><a >No Apps Found</a></li>
                        @endforelse
                    </ul>

                </div><!-- /.col-md-3 -->

                <div class="lqd-column col-md-2 col-sm-6  mb-30">
                    <h3 class="widget-title">Follow us</h3>
                    <ul class="social-icon social-icon-md">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    {{-- <ul class="social-icon social-icon-md mt-20"> --}}
                        <p class="mt-10">
                            FortySeven@info
                            <br/>
                            290 xxx xxx 260,
                            xxx
                            <br>
                            +12 xxx xxxx
                        </p>
                    {{-- </ul> --}}
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    {{-- <section class="vc_row pt-60">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">

                <div class="lqd-column col-md-6 d-flex flex-wrap align-items-center">

                    <figure class="mr-3">
                        <img src="{{ asset('assets/logo-dark.png') }}" width="100px" alt="Ave Logo">
                    </figure>

                    <p class="font-size-16 my-0">Copyright
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, <span
                            class="text-secondary font-weight-bold"><span>{{ config('app.name', 'Forty seven app') }}</span></span>.
                        All Rights Reserved.
                    </p>

                </div><!-- /.lqd-column col-md-6 -->

                <div class="lqd-column col-md-5 text-md-right">

                    <ul class="social-icon social-icon-md mb-25">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    </ul>

                </div><!-- /.lqd-column col-md-5 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.vc_row --> --}}

</footer><!-- /.main-footer -->

</div><!-- /#wrap -->

<script src="{{ asset('assets/web/assets/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/theme-vendors.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/theme.min.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/liquidAjaxMailchimp.min.js') }}"></script>
@yield('js')



</body>

</html>
