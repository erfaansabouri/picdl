@php
    $dynamic_setting = \App\Models\DynamicSetting::getData();
@endphp
<!DOCTYPE html>
<html lang="en">
@include('website.partials.head')
<body>
@include('sweet::alert')
@include('website.partials.navbar')
@yield('content')
@include('website.partials.footer')
@include('website.partials.scripts')
@stack('scripts')
</body>
</html>
