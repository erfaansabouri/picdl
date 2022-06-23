@extends('website.auth.master')
@section('content')
    <section class="login">
        @include('website.auth.logo')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-main d-flex align-items-center justify-content-center">
                        <form action="" class="login-box bg-white p-3 d-flex flex-column align-items-center justify-content-center">
                            <p class="login-subtitle d-flex align-items-center text-center">کاربر گرامی حتماً برای حساب کاربری خود رمز عبور تعریف نمایید
                                تا در صورت قطعی احتمالی اپراتور ارسال پیامک، بتوانید
                                وارد حساب کاربری شوید.</p>
                            <p class="login-subtitle d-flex align-items-center text-center">در صورت عدم تعریف رمز توسط کاربر مسئولیتی
                                متوجه پیک دی ال نمی باشد.</p>
                            <div class="w-100 py-3 mb-3">
                                <div class="input-group d-flex align-items-center mb-2 py-2">
                                    <span class="icon-key-svgrepo-com"></span>
                                    <input type="password" placeholder="رمز عبور " class="number-input">
                                    <span class="icon-eye-svgrepo-com1 show-pass"></span>
                                </div>
                                <div class="input-group d-flex align-items-center py-2">
                                    <span class="icon-key-svgrepo-com"></span>
                                    <input type="password" placeholder="تکرار رمز عبور " class="number-input">
                                    <span class="icon-eye-svgrepo-com1 show-pass"></span>
                                </div>
                            </div>
                            <button type="submit" class="login-btn btn-green">ثبت رمز</button>
                            <a href="{{ route('auth.skip-new-password-and-login', ['token' => encrypt($user)]) }}" class="acceptance-rules my-4 text-center">فعلا تمایلی ندارم، بعدا انجام می دهم.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('website.auth.footer')
    </section>
@endsection
