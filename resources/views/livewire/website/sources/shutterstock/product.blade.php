<div>
    <section class="product mt-4" wire:init="loadProduct">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="row">
                            <div class="col-lg-5 mb-3">
                                <div class="w-100 product_img">
                                    @if($loadProduct)
                                    <img src="{{ @$product->assets->huge_thumb->url }}" alt="" class="w-100">
                                    @else
                                        <img src="{{ asset('assets/img/loading.gif') }}" alt="" class="w-100">
                                    @endif
                                </div>
                                @if($loadProduct)
                                <span class="image-ID"> شناسه تصویر: {{ @$product->id }}</span>
                                @endif
                            </div>
                            <div class="col-lg-7 mb-3">
                                <ul class="tabs d-inline-flex">
                                    <li>
                                        <a href="#tab1" class="day date-item">Vector</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" class="month date-item">JPEG </a>
                                    </li>
                                </ul>
                                <div class="tabContainer pt-3">

                                    <div id="tab1" class="tabContent">
                                        <p> عکس های vector دارای قابلیت تغییر اندازه عکس بدون کم شدن از کیفیت عکس هستند .</p>
                                    </div>

                                    <div id="tab2" class="tabContent">
                                        @if($loadProduct)
                                            @foreach(@$product->assets ?? [] as $asset)
                                                @if(!empty(@$asset->display_name))
                                                    <p>سایز :{{ @$asset->display_name }} | عرض: {{ @$asset->width }} | ارتفاع: {{ @$asset->height }} | dpi: {{ @$asset->dpi }}</p>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>

                                </div>
                                <div class="line"></div>
                                <div>
                                    <h4 class="description-title mb-2">توضیحات شاتراستاک :</h4>
                                    @if($loadProduct)
                                    <p class="description-text">{{ @$product->description }}</p>
                                    @endif
                                    <div class="product_btns d-flex align-items-center justify-content-evenly mt-4">
                                        <a href="credit-packages.html" class="buy-btn btn-blue d-flex align-items-center justify-content-center">خرید بسته اعتباری</a>
                                        <a href="#"  class="single-purchase-btn btn-green d-flex align-items-center justify-content-center"> خرید تکی ، 25/000 تومان</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
