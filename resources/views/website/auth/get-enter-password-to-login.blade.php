@extends('website.auth.master')
@section('content')
    <section class="login">
        @include('website.auth.logo')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-main d-flex align-items-center justify-content-center">
                        <form action="{{ route('auth.post-login-with-token-and-password') }}" method="post" class="login-box bg-white p-3 d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            @method('post')
                            <x-error></x-error>
                            <p class="login-subtitle d-flex align-items-center text-center">با شماره {{ decrypt($_GET['token'])->phone_number }} قبلاً ثبت‌ نام کرده اید.</p>
                            <p class="login-subtitle d-flex align-items-center text-center">لطفاً رمز عبور خود را وارد کنید.</p>
                            <div class="w-100 py-3 mb-3">
                                <div class="input-group d-flex align-items-center mb-2 py-2">
                                    <span class="icon-key-svgrepo-com"></span>
                                    <input name="password" type="text" placeholder="رمز ورود " class="number-input text-center">
                                    <input type="hidden" name="token" value="{{ $_GET['token'] }}">
                                </div>
                            </div>
                            <button type="submit" class="login-btn btn-green">ادامه</button>
                            <a href="{{ route('auth.get-login-with-phone-number-and-otp', ['phone_number' => decrypt($_GET['token'])->phone_number]) }}" type="button" class="login-btn loginCode-btn mt-3 text-center">ورود با کد تایید پیامکی</a>
                            <a href="{{ route('auth.forget-password-get-otp', $_GET['token']) }}" class="acceptance-rules my-4 text-center">رمز عبور خود را فراموش کرده‌اید؟ کلیک کنید</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('website.auth.footer')
    </section>
@endsection
