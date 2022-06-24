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
                        <div class="credit-emptiness d-flex flex-column align-items-center justify-content-center">
                            <h3>شما بسته فعالی ندارید</h3>
                            <a href="../credit-packages.html" class="btn-buy btn-green">برای خرید اینجا کلیک کنید</a>
                        </div>
                        <!-- <h3 class="active-package text-center ">بسته فعال : 10 اعتبار (باقیمانده: 7 اعتبار)</h3> -->
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
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>سوابق خرید</h3>
                                <a href="#" class="more-view-btn btn-blue">مشاهده بیشتر</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>شماره سفارش</th>
                                <th>نوع گردش</th>
                                <th>سایت</th>
                                <th>پرداخت</th>
                                <th>قیمت(تومان)</th>
                                <th>تخفیف</th>
                                <th>مبلغ(تومان)</th>
                                <th>تاریخ خرید</th>
                                <th>اعتبار باقیمانده</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="ردیف">1</td>
                                <td data-label="شماره سفارش">1236544</td>
                                <td data-label="نوع گردش">خرید فایل تکی
                                    12312555
                                </td>
                                <td data-label="سایت">Shutterstock</td>
                                <td data-label="پرداخت">آنلاین / ملت / کد رهگیری</td>
                                <td data-label="قیمت(تومان)">000/25</td>
                                <td data-label="تخفیف">-</td>
                                <td data-label="مبلغ(تومان)">000/25</td>
                                <td data-label="تاریخ خرید">18/02/1401</td>
                                <td data-label="اعتبار باقیمانده">-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
