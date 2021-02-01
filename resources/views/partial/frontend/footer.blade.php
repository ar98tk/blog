<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
    <div class="footer-static-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__widget footer__menu">
                        <div class="ft__logo">
                            <a href="{{route('frontend.index')}}">
                                <img src="{{asset('frontend/images/logo/logo.png')}}" width="90" alt="logo">
                            </a>
                            <p>{!! getSettingsOf('site_description') !!}</p>
                        </div>
                        <div class="footer__content">
                            <ul class="social__net social__net--2 d-flex justify-content-center">
                                <li><a href="{!! getSettingsOf('facebook_id') !!}"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="{!! getSettingsOf('twitter_id') !!}"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="{!! getSettingsOf('youtube_id') !!}"><i class="bi bi-youtube"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copyright">
                        <div class=" text-center">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="#">Blog.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="payment text-right">
                        <img src="{{asset('frontend/images/icons/payment.png')}}" alt="" />
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</footer>
<!-- //Footer Area -->
