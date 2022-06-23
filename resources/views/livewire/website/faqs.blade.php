<div>
    <section class="common-questions mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white py-3 px-4">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>پرسش های متداول</h3>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="tabs">
                                @foreach(\App\Models\Faq::query()->get() ?? [] as $faq)
                                    <div class="tab">
                                        <input type="radio" id="rd{{ $faq->id }}" name="rd">
                                        <label class="tab-label d-flex align-items-center" for="rd{{ $faq->id }}"><span class="icon-question-svgrepo-com"></span>{{ $faq->question }}</label>
                                        <div class="tab-content">
                                            {!! nl2br($faq->answer) !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
