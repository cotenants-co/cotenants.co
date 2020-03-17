<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        @section('title', '')
    </head>
    <body>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </body>
</html>