@extends('website.auth.master')
@section('content')
    <section class="login">
        @include('website.auth.logo')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-main d-flex align-items-center justify-content-center">
                        <form action="{{ route('auth.post-otp') }}" method="post" class="login-box bg-white p-3 d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            @method('post')
                            <x-error></x-error>
                            <p>{{ $user->otp }}</p>
                            <p class="login-subtitle d-flex align-items-center text-center">کد ارسال شده به شماره  {{ $user->phone_number }} را وارد نمایید.</p>
                            <div class="w-100 py-3 my-3">
                                <div class="input-group d-flex align-items-center">
                                    <span class="icon-mobile-svgrepo-com"></span>
                                    <input name="user_id" type="hidden" value="{{ $user->id }}">
                                    <input name="otp" type="text" placeholder="کد ارسالی" class="number-input text-center">
                                </div>
                            </div>
                            <button type="submit" class="login-btn btn-green">ادامه</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('website.auth.footer')
    </section>
@endsection
