@extends('website.auth.master')
@section('content')
    <section class="login">
        @include('website.auth.logo')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-main d-flex align-items-center justify-content-center">
                        <form action="{{ route('auth.post-phone-number') }}" method="post" class="login-box bg-white p-3 d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            @method('post')
                            <p class="login-subtitle text-center">لطفاً برای ادامه شماره موبایل خود را وارد نمایید:</p>
                            <div class="input-group d-flex align-items-center  py-3 my-4">
                                <span class="icon-mobile-svgrepo-com"></span>
                                <input name="phone_number" type="text" placeholder="شماره موبایل خود را وارد کنید" class="number-input text-center">
                            </div>
                            <button type="submit" class="login-btn btn-green">ورود / ثبت نام</button>
                            <p class="acceptance-rules my-4 text-center"> با ورود یا ثبت نام شما <a href="{{ route('rules') }}">قوانین </a> استفاده از پیک دی ال را می‌پذیرید. </p>
                            <a href="#" class="forget-password text-center">اگر رمز عبور خود را فراموش کرده اید کلیک کنید</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('website.auth.footer')
    </section>
@endsection
