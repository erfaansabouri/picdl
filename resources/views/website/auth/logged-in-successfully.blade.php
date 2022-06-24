@extends('website.auth.master')
@section('content')
    <section class="login">
        @include('website.auth.logo')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-main d-flex align-items-center justify-content-center">
                        <form action="" class="login-box bg-white p-3 d-flex flex-column align-items-center justify-content-center">
                            <span class="icon-accept-check-good-mark-ok-tick-svgrepo-com icon-successful"></span>
                            <p class="successful-text mt-2">شما با موفقیت وارد حساب کاربری خود شدید</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('website.auth.footer')
    </section>
@endsection
