@extends('website.master')
@section('content')
    <section class="con-404 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="con-404_wrapper d-flex flex-column align-items-center justify-content-center">
                        <h1>404</h1>
                        <p>متاسفیم</p>
                        <span class="text-center">صفحه مورد نظر شما یافت نشد!</span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="img-404 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/404.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
