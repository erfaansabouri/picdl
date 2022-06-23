<div>
    <section class="contact mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span> ارتباط با ما</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 mb-3">
                                <div class="contact_wrapper">
                                    <p>
                                        {{ \App\Models\DynamicSetting::getData('contact_us') }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-3">
                                <x-error></x-error>
                                <form action="{{ route('contact-us.store') }}" class="contact-form" method="post">
                                    @csrf
                                    @method('post')
                                    <input name="name" type="text" placeholder="نام">
                                    <input name="email_or_phone" type="text" placeholder="ایمیل / موبایل*">
                                    <textarea name="description" id="" cols="30" rows="10" placeholder="توضیحات*"></textarea>
                                    <div class="d-flex align-items-center">
                                        <input name="captcha" type="text" placeholder="کدتصویر">
                                        <div class="mx-2 captcha-image">
                                            {!! \Mews\Captcha\Facades\Captcha::img() !!}
                                        </div>
                                        <button class="btn btn-outline-success" type="button" id="refresh-captcha"><i class="icon-reload"></i></button>
                                    </div>
                                    <button type="submit" class="contact-form-btn btn-green">ارسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
