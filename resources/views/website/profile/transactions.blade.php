@extends('website.master')
@section('content')
    <section class="panel mt-4">
        <div class="container">
            <x-profile-nav-items></x-profile-nav-items>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section bg-white p-3">
                        <div class="title-section">
                            <div class="title-section_inner d-flex align-items-end justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>سوابق خرید </h3>
                                <form action="" class="d-flex align-items-center  flex-wrap justify-content-end ">

                                    <div class="search-title d-flex align-items-center mb-2">
                                        <label for="search">شناسه:</label>
                                        <div class="search-title_inner d-flex align-items-center">
                                            <input type="search" name="search" id="search">
                                            <button type="submit" class="search-btn d-flex align-items-center justify-content-center"><span class="icon-magnifying-glass"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center w-100 flex-column">
                            <x-transactions-table :transactions="@$transactions"></x-transactions-table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
