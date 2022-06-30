@php
    $dynamic_setting = \App\Models\DynamicSetting::getData();
@endphp
<!DOCTYPE html>
<html lang="en">
@livewireStyles
@include('website.partials.head')
<body>
@include('sweet::alert')
@include('website.partials.navbar')
@yield('content')
@include('website.partials.footer')
@livewireScripts
@include('website.partials.scripts')
@stack('scripts')
</body>
</html>
