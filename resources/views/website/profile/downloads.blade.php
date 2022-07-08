@extends('website.master')
@section('content')
    <x-profile-nav-items></x-profile-nav-items>
    <section class="special-offers mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white p-3">
                        <div class="title-section">
                            <div class="title-section_inner d-flex align-items-end justify-content-between w-100">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>  سوابق دانلود </h3>
                                <form action="" class="d-flex align-items-center  flex-wrap justify-content-end ">
                                    <div class="search-title d-flex align-items-center mb-2">
                                        <label for="search">کد:</label>
                                        <div class="search-title_inner d-flex align-items-center">
                                            <input type="search" name="search" id="search">
                                            <button type="submit" class="search-btn d-flex align-items-center justify-content-center"><span class="icon-magnifying-glass"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($downloads as $download)
                                <div class="col-lg-3 mb-3">
                                    <div class="special-offers-cart">
                                        <div class="special-offers-cart_img">
                                            <div class="special-offers-cart_img__inner">
                                                <img src="{{ $download->file->full_path }}" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="special-offers-cart_title d-flex align-items-center ">{{ $download->code }}</p>
                                            <a target="_blank" href="{{ $download->file->full_path }}" class="view-btn btn-green"> دانلود <span class="icon-download"></span></a>
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
@endsection
