<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8" />
            <title> Dastone - Admin & Dashboard Template</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
            @include('layouts.head-css')
        </head>

        @yield('body')

        @yield('content')

        @include('layouts.vendor-scripts')
    </body>
</html>
