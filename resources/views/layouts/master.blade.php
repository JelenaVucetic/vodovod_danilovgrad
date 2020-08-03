<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ViK Danilovgrad</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/main.css">

    <!--Boostrap Core CSS
    ================================================== -->
    <link href="/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">


    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>
    <script defer src="/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
{{--     <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest"> --}}

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header
    ================================================== -->
    @include('layouts.header')
    <!-- Header End -->


    <!-- Content
    ================================================== -->
    <div class="s-content">

    @yield('content')

   </div> <!-- end content-wrap -->


    <!-- Footer
    ================================================== -->
   @include('layouts.footer')
    <!-- end Footer-->


    <!-- Java Script
    ================================================== -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>
