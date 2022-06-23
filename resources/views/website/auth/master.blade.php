<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login code</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
@livewireStyles
<body>
@include('sweet::alert')
@yield('content')

<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- js -->
<script src="{{ asset('assets/js/js.js') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>
