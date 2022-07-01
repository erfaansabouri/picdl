@extends('website.master')
@section('content')
    @livewire('website.sources.shutterstock.product', ['shutterstock_id' => $shutterstock_id])
@endsection
