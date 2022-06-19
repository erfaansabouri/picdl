@extends('website.master')
@section('content')
    <section class="rules mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section py-3 px-4 bg-white">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>درباره ما</h3>
                            </div>
                        </div>
                        <p>
                            {!! nl2br(\App\Models\DynamicSetting::getData('about_us')) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
