<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            height: 100%;
        }

        body.login-page {
            background-color: #f7f9fb;
            font-size: 14px;
        }

        .login-page .brand {
            width: 90px;
            height: 90px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto;
            margin: 40px auto;
            box-shadow: 0 0 40px rgba(0, 0, 0, .05);
        }

        .login-page .brand img {
            width: 100%;
        }

        .login-page .card-wrapper {
            width: 400px;
        }

        .login-page .card {
            border-color: transparent;
            box-shadow: 0 0 40px rgba(0, 0, 0, .05);
        }

        .login-page .card.fat {
            padding: 10px;
        }

        .login-page .card .card-title {
            margin-bottom: 30px;
            text-align: center;
        }

        .login-page .form-control {
            border-width: 2.3px;
        }

        .login-page .form-group label {
            width: 100%;
            font-weight: normal;
        }

        .login-page .btn.btn-block {
            padding: 12px 10px;
        }

        .login-page .margin-top20 {
            margin-top: 20px;
        }

        .login-page .no-margin {
            margin: 0;
        }

        .login-page .footer {
            margin: 40px 0;
            color: #888;
            text-align: center;
        }

        .btn-twitter {
            background-color: #1da1f2;
            color: #fff;
        }
    </style>
</head>

<body class="login-page">
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>