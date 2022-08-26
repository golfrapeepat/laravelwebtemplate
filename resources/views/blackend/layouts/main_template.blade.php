<!DOCTYPE html>
<html lang="en">
<head>
    @include('blackend.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('assets/blackend/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('blackend.includes.navbar')

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
              <img src="{{asset('assets/blackend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">อยุธยา</span>
            </a>

            @include('blackend.includes.sidebar')

        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('blackend.includes.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>

    @include('blackend.includes.foot')
    @stack('scripts')
</body>
</html>