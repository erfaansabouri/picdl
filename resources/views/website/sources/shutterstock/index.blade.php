@extends('website.master')
@section('content')
    @include('website.partials.slider')
    @include('website.partials.search-box')
    @include('website.partials.search-result', ['result' => @$result ?? []])
@endsection
