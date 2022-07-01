@extends('website.master')
@section('content')
   @include('website.partials.slider') {{-- DONE --}}
   @include('website.partials.search-box')
   @include('website.partials.order-procedures') {{-- DONE --}}
   @include('website.partials.special-offers') {{-- DONE (unless redirect)--}}
   @include('website.partials.why-picdl') {{--DONE--}}
   @include('website.partials.blog') {{-- DONE --}}
   @livewire('website.faqs') {{--DONE--}}
@endsection
