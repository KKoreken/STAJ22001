<!doctype html>
<html class=' dark' lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Kadir KÖREKEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('public/build/images/favicon.ico') }}">

    <!-- include head css -->
    @include('layouts.user.head-css')
</head>

@yield('body')


            @yield('content')

</body>

</html>
