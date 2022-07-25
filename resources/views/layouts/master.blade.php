<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('layouts.header')
        @include('layouts.css')
    </head>
    <body>
        @include('layouts.navbar')
        @section('sidebar')
            <p>This is the master sidebar.</p>
        @show

        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>