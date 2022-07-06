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
                                    @if(auth()->user()->credit_count >= getSourceCreditForSingleFile(1, @$product->image_type))
                                    <div class="d-flex align-items-center justify-content-evenly mt-4">
                                        <div class="download-box d-flex flex-column align-items-center justify-content-center">
                                            <span class="residual-credit">دانلود {{ getSourceCreditForSingleFile(1, @$product->image_type) }} از {{ auth()->user()->credit_count }} اعتبار با قیمانده</span>
                                            <a href="{{ route('sources.shutter-stock.download', @$product->id) }}" class="down-btn btn-green d-flex align-items-center justify-content-center">دانلود<span class="icon-download"></span></a>
                                            </a>
                                        </div>
                                    </div>
                                    @else
                                        <div class="product_btns d-flex align-items-center justify-content-evenly mt-4">
                                            <a href="credit-packages.html" class="buy-btn btn-blue d-flex align-items-center justify-content-center">خرید بسته اعتباری</a>
                                            <a href="#"  class="single-purchase-btn btn-green d-flex align-items-center justify-content-center"> خرید تکی ، 25/000 تومان</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar items  -->
    <section class="similar-items mt-4" wire:init="loadProduct">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-end justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-magnifying-glass icon__search"></span>آیتم های مشابه </h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center w-100 flex-column">
                            <div class="image-gallery">
                                <div id="photos">
                                    @if($loadProduct)
                                        @foreach(@$similar_products->data ?? [] as $similar_product)
                                            <a href="{{ route('sources.shutter-stock.show', $similar_product->id) }}">
                                                <img src="{{ $similar_product->assets->huge_thumb->url }}">
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="similar-keywords mt-4" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-end justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-magnifying-glass icon__search"></span> کلمات کلیدی مشابه </h3>
                            </div>
                        </div>
                        <div class="key-words d-flex align-items-center w-100 flex-wrap">
                            @if($loadProduct)
                                @foreach(@$product->keywords ?? [] as $keyword)
                                    <a href="#" class="key-words_link d-flex align-items-center justify-content-center">{{ $keyword }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
