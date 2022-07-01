@extends('website.master')
@section('content')
    <!-- product  -->
    @livewire('website.sources.shutterstock.product', ['shutterstock_id' => $shutterstock_id])
    <!-- Similar items  -->
    <section class="similar-items mt-4">
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
                                    <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/08/c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg">
                                    <img src="https://www.w3schools.com/w3css/img_lights.jpg">
                                    <img src="http://placekitten.com/350/300">
                                    <img src="http://placekitten.com/350/350">
                                    <img src="http://placekitten.com/350/200">
                                    <img src="http://placekitten.com/350/275">
                                    <img src="http://placekitten.com/350/215">
                                    <img src="http://placekitten.com/350/315">
                                    <img src="http://placekitten.com/350/325">
                                    <img src="http://placekitten.com/350/210">
                                    <img src="http://placekitten.com/350/175">
                                    <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/08/c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg">
                                    <img src="https://www.w3schools.com/w3css/img_lights.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Similar keywords  -->
    <section class="similar-keywords mt-4">
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
                            @foreach(@$result->keywords ?? [] as $keyword)
                                <a href="#" class="key-words_link d-flex align-items-center justify-content-center">{{ $keyword }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
