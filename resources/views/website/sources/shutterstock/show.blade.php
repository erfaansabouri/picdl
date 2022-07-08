@extends('website.master')
@section('content')
    @livewire('website.sources.shutterstock.product', ['shutterstock_id' => $shutterstock_id])
@endsection
@push('scripts')
    <script>
        // document ready
        $(document).ready(function () {
            console.log('ready');
            $('.hide-after-click').click(function() {
                console.log('clicked');
                $('.hide-after-click').hide();
            });
        });


    </script>
@endpush
