<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->   
    <link rel="stylesheet" href="{{ asset('./vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./vendor/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./dist/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('./vendor/toastr/toastr.min.css') }}">
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="wrapper">
            @include('inc.navbar')
            <main class="py-4" id="page-wrapper">
                @include('inc.breadcrumbs')
                @include('inc.errors')
                @include('inc.message')
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('./vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('./vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('./vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('./dist/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('./vendor/toastr/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    @yield('js')
</body>
</html>
