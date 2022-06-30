<section class="special-offers mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-section bg-white p-3">
                    <div class="title-section">
                        <div class="d-flex align-items-center">
                            <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>پیشنهادات ویژه پیک دی ال</h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(\App\Models\HomepageOffer::query()->get() as $homepageOffer)
                            <div class="col-lg-4 mb-3">
                                <div class="special-offers-cart">
                                    <div class="special-offers-cart_img">
                                        <div class="special-offers-cart_img__inner">
                                            <img src="{{ getPublicImage($homepageOffer->file_path) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="special-offers-cart_title d-flex align-items-center "><span class="icon-arrow"></span>{{ $homepageOffer->title }}</p>
                                        <a href="#" class="view-btn btn-green">مشاهده</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
