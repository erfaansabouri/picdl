<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 d-flex align-items-center p-0">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarText">
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
                        @if(\Illuminate\Support\Facades\Auth::guard('web')->check())
                            {{ \Illuminate\Support\Facades\Auth::user()->phone_number }}
                        @endif
                    </ul>
                    <span class="navbar-text d-flex align-items-center">
                    <a href="login.html" class="login-nav-btn nav-btn btn-blue d-flex align-items-center">ورود / عضویت</a>
                    <a href="{{ route('credit-packages') }}" class="buy-btn nav-btn btn-green d-flex align-items-center mr-2">خرید اعتبار</a>
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
                    <ul class="show-dropdown">
                        <li class="active">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="rules.html">قوانین و مقررات</a>
                        </li>
                        <li>
                            <a href="about.html">درباره ما</a>
                        </li>
                        <li>
                            <a href="contact.html">تماس با ما</a>
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
                <div class="btns d-flex align-items-center justify-content-end">
                    <a href="credit-packages.html" class="buy-btn nav-btn btn-green d-flex align-items-center mr-2">خرید اعتبار</a>
                    <a href="login.html" class="login-nav-btn nav-btn btn-blue d-flex align-items-center">ورود / ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
</nav>
