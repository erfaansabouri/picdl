<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- js -->
<script src="{{ asset('assets/js/js.js') }}"></script>

@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
@endif
