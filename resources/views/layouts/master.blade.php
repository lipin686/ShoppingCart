<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('layouts.header')
        @include('layouts.css')
    </head>
    <body class='background'>
        @include('layouts.navbar')
    
        <div class="container">
            @yield('content')
        </div>
        
        
        @include('layouts.footer')
        @include('layouts.js')
        
    </body>
</html>