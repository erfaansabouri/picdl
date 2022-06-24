<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white p-0">
    <div class="container h-100">
        <div class="row w-100">
            <div class="col-lg-12 d-flex align-items-center p-0">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                <div class="collapse navbar-collapse h-100 d-flex align-items-center" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(\Illuminate\Support\Facades\Route::is('rules')) active text-success @endif" @if(\Illuminate\Support\Facades\Route::is('rules')) aria-current="page" @endif href="{{ route('rules') }}">قوانین و مقررات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(\Illuminate\Support\Facades\Route::is('faqs')) active text-success @endif" @if(\Illuminate\Support\Facades\Route::is('faqs')) aria-current="page" @endif href="{{ route('faqs') }}">پرسش های متداول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(\Illuminate\Support\Facades\Route::is('about-us')) active text-success @endif" @if(\Illuminate\Support\Facades\Route::is('about-us')) aria-current="page" @endif href="{{ route('about-us') }}">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(\Illuminate\Support\Facades\Route::is('contact-us')) active text-success @endif" @if(\Illuminate\Support\Facades\Route::is('contact-us')) aria-current="page" @endif href="{{ route('contact-us') }}">تماس با ما</a>
                        </li>
                    </ul>
                    <span class="navbar-text d-flex align-items-center h-100 p-0 d-flex justify-content-center">
                    <ul class="d-flex align-items-center h-100 justify-content-center">
                        <li class="megamenu h-100 d-flex align-items-center">
                            <a href="#" class="profile-btn nav-btn d-flex align-items-center">{{ auth()->user()->profile_name }} <span class="icon-chevron-down"></span></a>
                            <ul class="sub-menu_profile sub-menu position-absolute bg-white">
                                <li><a href="{{ route('profile.dashboard') }}">داشبورد</a></li>
                                <li><a href="panel-buy.html">سوابق خرید</a></li>
                                <li><a href="panel-download.html">سوابق دانلود</a></li>
                                <li><a href="panel-support.html">پشتیبانی</a></li>
                                <li><a href="{{ route('profile.user-details') }}">مشخصات</a></li>
                                <li><a href="{{ route('auth.logout') }}">خروج</a></li>
                            </ul>
                        </li>
                        <li class="megamenu h-100 d-flex align-items-center">
                            <a href="{{ route('credit-packages') }}" class="credit-inventory-btn nav-btn btn-green d-flex align-items-center mr-2"> اعتبار <span class="icon-chevron-down"></span></a>
                            <ul class="sub-menu_credit sub-menu position-absolute">
                                <li class="text-center"><span class="text-center">{{ \Illuminate\Support\Facades\Auth::user()->credit_count }} اعتبار باقی مانده</span></li>
                            </ul>
                        </li>
                    </ul>
                  </span>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- nav mobile -->
<nav class="navbar-mobile  bg-white">
    <div class="container">
        <div class="menu_overlay"></div>
        <div class="sidebarMenu bg-white">
            <div class="sidebar w-100">
                <div id="accordian">
                    <div class="sidebar-head  d-flex align-items-center justify-content-between">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        <span class="icon-cross close_hamberger"></span>
                    </div>
                    <div class="credit-nav d-flex flex-column align-items-center justify-content-center">
                        <span>{{ \Illuminate\Support\Facades\Auth::user()->credit_count }} اعتبار باقیمانده</span>
                    </div>
                    <ul class="show-dropdown">
                        <li class="active">
                            <a href="{{ route('home') }}">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="{{ route('rules') }}">قوانین و مقررات</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">درباره ما</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}">تماس با ما</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav_bob_inner">
            <div class="head d-flex align-items-center justify-content-between w-100">
                <div class=" d-flex align-items-center justify-content-center">
                    <a href="#" class="openMenu"><span class="icon-menu"></span></a>
                    <div class="logo-mobile d-flex justify-content-start">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </div>
                </div>
                <ul class="d-flex align-items-center h-100 justify-content-center">
                    <li class="megamenu h-100 d-flex align-items-center">
                        <a href="#" class="profile-btn nav-btn d-flex align-items-center">{{ \Illuminate\Support\Facades\Auth::user()->profile_name }} <span class="icon-chevron-down"></span></a>
                        <ul class="sub-menu_profile sub-menu position-absolute bg-white">
                            <li><a href="{{ route('profile.dashboard') }}">داشبورد</a></li>
                            <li><a href="panel-buy.html">سوابق خرید</a></li>
                            <li><a href="panel-download.html">سوابق دانلود</a></li>
                            <li><a href="panel-support.html">پشتیبانی</a></li>
                            <li><a href="{{ route('profile.user-details') }}">مشخصات</a></li>
                            <li><a href="{{ route('auth.logout') }}">خروج</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
