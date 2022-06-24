@extends('website.master')
@section('content')
    <section class="panel mt-4">
        <div class="container">
            <x-profile-nav-items></x-profile-nav-items>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white p-3">
                        <div class="title-section">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>مشخصات </h3>
                            </div>
                        </div>
                        <x-error></x-error>
                        @php
                            $user = \Illuminate\Support\Facades\Auth::guard('web')->user();
                        @endphp
                        <form action="{{ route('profile.update-details') }}" method="post" class="form-panel d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            @method('put')
                            <div class="input-group d-flex align-items-center mb-2 py-2">
                                <span class="icon-persone"></span>
                                <input name="full_name" value="{{ $user->full_name }}" type="text" placeholder="نام و نام خانوادگی (اختیاری)"  class="number-input">
                            </div>
                            <div class="input-group d-flex align-items-center mb-2 py-2" >
                                <span class="icon-mobile-svgrepo-com"></span>
                                <input name="phone_number" value="{{ $user->phone_number }}" type="text" placeholder="شماره تماس"  class="number-input">
                            </div>
                            <div class="input-group d-flex align-items-center mb-2 py-2">
                                <span class="icon-email-svgrepo-com"></span>
                                <input name="email" value="{{ $user->email }}" type="email" placeholder="ایمیل(اختیاری)"  class="number-input text-right">
                            </div>
                            <div class="input-group d-flex align-items-center mb-2 py-2">
                                <span class="icon-key-svgrepo-com"></span>
                                <input name="password" type="password" placeholder="رمز جدید"  class="number-input">
                                <span class="icon-eye1 show-pass"></span>
                            </div>
                            <div class="input-group d-flex align-items-center mb-2 py-2">
                                <span class="icon-key-svgrepo-com"></span>
                                <input name="password_confirmation" type="password" placeholder="نکرار رمز جدید"  class="number-input">
                                <span class="icon-eye1 show-pass"></span>
                            </div>
                            <div class="checkbox_wrapper w-100">
                                <input type="checkbox" id="check" name="is_subscribed" @if($user->is_subscribed) checked @endif>
                                <label for="check">ارسال پیامک اطلاعات و رخدادها به شماره همراه شما</label>
                            </div>
                            <button type="submit" class="data-edit-btn my-5 d-flex align-items-center">
                                <span class="icon-edit"></span>
                                ویرایش اطلاعات شخصی
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
