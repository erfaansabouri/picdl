<!-- footer -->
<section class="footer-top mt-5">
    <div class="container">
        <div class="row py-2">
            <div class="col-lg-8">
                <div class="footer-top__inner d-flex align-items-center justify-content-evenly w-100">
                    <h5 class="footer-top-title  mt-3">Picdl.ir</h5>
                    <div class="phone d-flex align-items-center">
                        <span class="icon-telephone-svgrepo-com icon__phone d-flex align-items-center justify-content-center" ></span>
                        <h5 class=" mt-3">{{ $dynamic_setting->phone  }} <span>({{ $dynamic_setting->phone_prefix }})</span></h5>
                    </div>
                    <div class="email d-flex align-items-center">
                        <span class="icon-email-svgrepo-com icon__phone d-flex align-items-center justify-content-center"></span>
                        <h5 class=" mt-3">{{ $dynamic_setting->email }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="social d-flex align-items-center justify-content-center">
                    <a href="{{ $dynamic_setting->instagram }}" class="d-flex align-items-center justify-content-center instagram"><span class="icon-instagram"></span></a>
                    <a href="{{ $dynamic_setting->telegram }}" class="d-flex align-items-center justify-content-center telegram"><span class="icon-icons8-telegram-app"></span></a>
                    <a href="{{ $dynamic_setting->aparat }}" class="d-flex align-items-center justify-content-center aparat"><span class="icon-icons8-aparat"><span class="path1"></span><span class="path2"></span></span></a>
                    <a href="{{ $dynamic_setting->twitter }}" class="d-flex align-items-center justify-content-center twitter"><span class="icon-twitter"></span></a>
                    <a href="{{ $dynamic_setting->youtube }}" class="d-flex align-items-center justify-content-center youtube"><span class="icon-youtube"></span></a>
                    <a href="{{ $dynamic_setting->facebook }}" class="d-flex align-items-center justify-content-center facebook"><span class="icon-facebook"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row py-4">
                    <div class="col-lg-4 mb-3">
                        <div class="footer-about">
                            <p>
                                {{ $dynamic_setting->footer }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <ul class="footer-menu">
                                    <li>
                                        <a href="{{ route('home') }}" class="footer-menu-link">صفحه نخست</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('auth.logout') }}"  class="footer-menu-link">خروج</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">رویه ارسال سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">رویه برگشت سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">شرایط استفاده</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#" class="footer-menu-link">صفحه نخست</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">رویه سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">رویه ارسال سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">رویه برگشت سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-menu-link">شرایط استفاده</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="footer-namad d-flex align-items-center justify-content-between">
                            <a href="#" class="footer-namad_box bg-white d-flex align-items-center justify-content-center"><img src="{{ asset('assets/img/namad1.png') }}" alt=""></a>
                            <a href="#" class="footer-namad_box bg-white d-flex align-items-center justify-content-center"><img src="{{ asset('assets/img/namad2.png') }}" alt=""></a>
                            <a href="#" class="footer-namad_box bg-white d-flex align-items-center justify-content-center"><img src="{{ asset('assets/img/namad13.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row copy-right">
            <div class="col-lg-12 d-flex align-items-center justify-content-center py-2">
                <p>« کلیه حقوق این سایت متعلق به پیک دی ال می باشد »</p>
            </div>
        </div>
    </div>
</footer>

