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
    <link rel="stylesheet" href="/css/post.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/about.css">


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
   {{-- @yield('arrow.css')--}}
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

    @yield('content')
     <!-- Header Content -->

    <!-- Map
  ================================================== -->
    <div class="container map">
        <h2>D.O.O. VIK DANILOVGRAD NA MAPI</h2>
        <p>Ul. Jefta - Čaja Šćepanovića b.b. Danilovgrad</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2939.519001147477!2d19.095362115696954!3d42.54427133144033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134dbeadeed2147f%3A0x1b90d5eb8bd5e8a0!2sJefta%20Scepanovica%20Caja%2C%20Montenegro!5e0!3m2!1sen!2s!4v1596472054318!5m2!1sen!2s" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- end Map-->

    <!-- Footer
    ================================================== -->
   @include('layouts.footer')
    <!-- end Footer-->


    <!-- Java Script
    ================================================== -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

    <script>
        window.jQuery(document).ready(function ($) {
            (function ($) { // Begin jQuery
                $(function () { // DOM ready
                    // If a link has a dropdown, add sub menu toggle.
                    $('nav ul li a:not(:only-child)').click(function (e) {
                        $(this).siblings('.nav-dropdown').toggle();
                        // Close one dropdown when selecting another
                        $('.nav-dropdown').not($(this).siblings()).hide();
                        e.stopPropagation();
                    });
                    // Clicking away from dropdown will remove the dropdown class
                    $('html').click(function () {
                        $('.nav-dropdown').hide();
                    });
                    // Toggle open and close nav styles on click
                    $('#nav-toggle').click(function () {
                        $('nav ul').slideToggle();
                    });
                    // Hamburger to X toggle
                    $('#nav-toggle').on('click', function () {
                        this.classList.toggle('active');
                    });
                }); // end DOM ready
            })(jQuery);
        });
    </script>

    <script>
        $('#more-arrows').click(function() {
            size_li = $(".post-row").length;
            x=3;
            $('.post-row li:lt('+x+')').show();
        })
    </script>
</body>

</html>
