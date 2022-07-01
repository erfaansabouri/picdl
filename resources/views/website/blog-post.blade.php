@extends('website.master')
@section('content')
    @livewire('website.blog-post', ['blogPost' => $blogPost])
@endsection
