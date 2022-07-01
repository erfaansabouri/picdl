@extends('website.master')
@section('content')
    @livewire('website.sources.shutterstock.product', ['shutterstock_id' => $shutterstock_id])

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
