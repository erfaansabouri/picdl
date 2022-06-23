@extends('website.master')
@section('content')
    @livewire('website.contact-us')
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#refresh-captcha').click(function() {
                $.ajax({
                    type: 'get',
                    url: '{{ route('contact-us.refresh-captcha') }}',
                    success:function(data) {
                        $('.captcha-image').html(data.captcha);
                    }
                });
            });
        });
    </script>
@endpush
