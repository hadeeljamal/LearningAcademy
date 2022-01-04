
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="{{route('Front.HomePage')}}"> <img src="{{asset('uploads/setting/'.$sett->logo)}}" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                         </p>

                         @include('Front.include.errors')

                        <form action="{{route('Front.message.newsletter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="{{$sett->face}}"> <i class="ti-facebook"></i> </a>
                            <a href="{{$sett->twitter}}"> <i class="ti-twitter-alt"></i> </a>
                            <a href="{{$sett->insta}}"> <i class="ti-instagram"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span>{{$sett->address . ', ' .$sett->city}} </p>
                            <p><span> Phone :</span> {{$sett->phone}}</p>
                            <p><span> Email : </span>{{$sett->email}} </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('Front/js')}}/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{asset('Front/js')}}/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Front/js')}}/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{asset('Front/js')}}/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{asset('Front/js')}}/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{asset('Front/js')}}/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{asset('Front/js')}}/owl.carousel.min.js"></script>
    <script src="{{asset('Front/js')}}/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{asset('Front/js')}}/slick.min.js"></script>
    <script src="{{asset('Front/js')}}/jquery.counterup.min.js"></script>
    <script src="{{asset('Front/js')}}/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{asset('Front/js')}}/custom.js"></script>

    @yield('Script')
</body>

</html>
