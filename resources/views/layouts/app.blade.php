<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        body.hold-transition {
            background-color: #f7f9fb;
            font-size: 14px;
        }

        .hold-transition .brand {
            width: 90px;
            height: 90px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto;
            margin: 40px auto;
            box-shadow: 0 0 40px rgba(0, 0, 0, .05);
        }

        .hold-transition .brand img {
            width: 100%;
        }

        .hold-transition .card-wrapper {
            width: 400px;
        }

        .hold-transition .card {
            border-color: transparent;
            box-shadow: 0 0 40px rgba(0, 0, 0, .05);
        }

        .hold-transition .card.fat {
            padding: 10px;
        }

        .hold-transition .card .card-title {
            margin-bottom: 30px;
        }

        .hold-transition .form-control {
            border-width: 2.3px;
        }

        .hold-transition .form-group label {
            width: 100%;
        }

        .hold-transition .btn.btn-block {
            padding: 12px 10px;
        }

        .hold-transition .margin-top20 {
            margin-top: 20px;
        }

        .hold-transition .no-margin {
            margin: 0;
        }

        .hold-transition .footer {
            margin: 40px 0;
            color: #888;
            text-align: center;
        }
        .jumbotron {
            margin-top: 2rem;
        }
    </style>
</head>

@guest 
    <body class="sidebar-collapse">
        @include('layouts.navbar-logout')

        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
@else
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts.navbar-logged')

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar-left')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('layouts.sidebar-right')
        </div>
        @include('layouts.footer')
    </body>
@endguest 

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>