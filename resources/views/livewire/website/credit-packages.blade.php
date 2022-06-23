<div>
    <section class="buy-package mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span> خرید بسته های اعتباری </h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center w-100 flex-column">
                            @foreach(\App\Models\CreditPackage::query()->get() ?? [] as $creditPackage)
                                <div class="buy-package_item p-2 d-flex align-items-center justify-content-between mb-3">
                                    <p class="text-center">بسته {{ $creditPackage->count }} اعتباری</p>
                                    <p class="text-center">{{ number_format($creditPackage->price) }} تومان</p>
                                    <a href="#" class="buy-btn btn-green text-center">خرید</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explanations  -->
    <section class="explanations mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-end justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span> توضیحات </h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center w-100 flex-column">
                            <p class="explanations_text">زمانی که شما میخواهید از سایت هایی که در لیست زیر میباشد فایل تهیه نمایید باید دقت کنید که مبنی هر فایل در هر سایت چند اعتبار می باشد.
                                اعتبار به این صورت است که طبق جدول زیر ، زمانی که سفارشی را در سایت می دهید ، طبق همین جدول اعتبار زیر از اعتبار اصلی شما کسر خواهد شد. به عنوان مثال اگر اعتبار
                                شما در سایت 10 باشد و شما عکسی را از سایت فری پیک سفارش دهید یک اعتبار کسر خواهد شد اما اگر عکسی را از سایت ایونتو سفارش دهید 5 اعتبار کسر خواهد شد.</p>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>سایت</th>
                                    <th> عکس (اعتبار)</th>
                                    <th>وکتور (اعتبار) </th>
                                    <th>فیلم (اعتبار)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Models\Source::query()->get() ?? [] as $source)
                                    <tr>
                                        <td data-label="سایت">{{ $source->website }}</td>
                                        <td data-label="عکس (اعتبار)">{{ $source->cost_per_image }}</td>
                                        <td data-label="فیلم (اعتبار) ">{{ $source->cost_per_vector }}</td>
                                        <td data-label="فیلم (اعتبار)">{{ $source->cost_per_film }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
