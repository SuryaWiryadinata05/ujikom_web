<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aplikasi Absensi</title>
    {{-- <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/styles.css') !!}" rel="stylesheet"> --}}

    <link rel="icon" type="image/png" href="khusus/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="khusus/css/util.css">
    <link rel="stylesheet" type="text/css" href="khusus/css/main.css">
</head>

<body>
    {{-- <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/">AN <span>Absensi</span></a>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/" class="uppercase">Home</a></li>
                            <li><a href="{{url('/panduan')}}" class="uppercase">panduan</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </nav> --}}
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container text-center">


        </div>
    </footer>
    {{-- <script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/smooth-scroll.js') !!}"></script> --}}


    <!--===============================================================================================-->
    <script src="khusus/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/vendor/bootstrap/js/popper.js"></script>
    <script src="khusus/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/vendor/daterangepicker/moment.min.js"></script>
    <script src="khusus/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="khusus/js/main.js"></script>

</body>

</html>
