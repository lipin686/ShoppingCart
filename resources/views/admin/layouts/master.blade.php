<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name') }}</title>
    @include('admin.layouts.header')
    @include('admin.layouts.css')
</head>

<body>
    @include('admin.layouts.navbar')
    <div id="main">
        @yield('content')
    </div>
    @include('admin.layouts.js')
</body>

</html>