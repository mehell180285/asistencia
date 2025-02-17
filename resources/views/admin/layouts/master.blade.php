<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazer Admin Dashboard</title>
    <link rel="icon" href="data:,">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app-dark.css')}}">
</head>

<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>

    <div id="app">

        <!-- Main Sidebar -->
        @include('admin.layouts.siderbar')

        <!-- Main -->
        <div id="main" class='layout-navbar navbar-fixed'>
            <!-- Header -->
            @include('admin.layouts.header')

            <!-- Main Content -->
            <div id="main-content">
                @yield('content')    
            </div>

            <!-- Footer -->
            @include('admin.layouts.footer')
        </div>
    </div>
    
    <script src="{{asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/compiled/js/app.js')}}"></script>
</body>
</html>
