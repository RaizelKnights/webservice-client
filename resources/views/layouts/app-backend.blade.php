<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>{{  env('APP_NAME') }} - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="{{ asset('backend') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('backend') }}/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('backend') }}/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    @stack('css')
</head>
<body>
    <!-- Sidenav -->
    @include('layouts.sidebar')
    <!-- Main content -->
    <div class="main-content">
        @include('layouts.navbar')
        @include('layouts.header')
        @yield('content')
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('backend') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional JS -->
    <script src="{{ asset('backend') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="{{ asset('backend') }}/assets/js/argon.js?v=1.0.0"></script>
    @stack('js')
</body>

</html>
