@extends('website.master')
@section('content')
    <section class="panel mt-4">
        <div class="container">
            <x-profile-nav-items></x-profile-nav-items>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="box-section bg-white p-3 h-100">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>اعتبار</h3>
                            </div>
                        </div>
                        @if($user->credit_count == 0)
                        <div class="credit-emptiness d-flex flex-column align-items-center justify-content-center">
                            <h3>شما بسته فعالی ندارید</h3>
                            <a href="{{ route('credit-packages') }}" class="btn-buy btn-green">برای خرید اینجا کلیک کنید</a>
                        </div>
                        @else
                            <h3 class="active-package text-center ">اعتبار باقی مانده: {{ $user->credit_count }} عدد</h3>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="box-section bg-white p-3 h-100 ">
                        <div class="title-section">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>آخرین سابقه دانلود</h3>
                                <a href="#" class="more-view-btn btn-blue">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <div class="last-download d-flex align-items-center w-100 flex-wrap">
                            <div class="last-download-img">
                                <img src="../img/construction-worker.png" alt="">
                            </div>
                            <div class="list-down">
                                <div class="d-flex align-items-center">
                                    <p>سایت</p>
                                    <p>تاریخ دانلود</p>
                                </div>
                                <div class="line"></div>
                                <div class="d-flex align-items-center">
                                    <p>شاتراستوک</p>
                                    <p>25/03/1401</p>
                                </div>
                            </div>
                            <a href="#" class="re-download-btn btn-green">دانلود مجدد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white p-3">
                        <div class="title-section">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>تراکنش ها</h3>
                                <a href="{{ route('profile.transactions') }}" class="more-view-btn btn-blue">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <x-transactions-table :transactions="@$transactions"></x-transactions-table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
