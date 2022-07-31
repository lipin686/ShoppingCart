<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('admin.layouts.header')
        @include('admin.layouts.css')
    </head>
    <body>
        @include('admin.layouts.navbar')
        @section('sidebar')
            <p>歡迎~ 此頁面為:</p>
        @show

        <div class="container">
            @yield('content')
        </div>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.js')
        
    </body>
</html>