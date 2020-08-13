<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ViK Danilovgrad</title>
    <meta name="description" content="ViK Danilovgrad | Početna Strana">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Danilovgradski vodovodni sistem, posle cetinjskog, je najstariji vodovodni sistem u Crnoj Gori. ">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://vikdanilovgrad.qqriq.me/images/Cover-slika-2.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://vikdanilovgrad.qqriq.me/" />
    <meta property="og:title" content="ViK Danilovgrad" />
    <meta property="og:description" content="Danilovgradski vodovodni sistem, posle cetinjskog, je najstariji vodovodni sistem u Crnoj Gori. " />
    
    <link rel="icon" type="image/png" href="/images/VIK-DG-Logo-Color.png" />
    <link rel="apple-touch-icon-precomposed" href="/images/VIK-DG-Logo-Color.png" type="image/png" sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" href="/images/VIK-DG-Logo-Color.png" type="image/png" sizes="120x120" />
    <link rel="apple-touch-icon" href="/images/VIK-DG-Logo-Color.png" sizes="180x180" />
  
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/base.css">

    <!--Boostrap Core CSS
    ================================================== -->
{{--     <link href="/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 --}}    
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

 <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>
    <script defer src="/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->

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
    <div class=" map">
        <h2 class="my-3">D.O.O. VIK DANILOVGRAD NA MAPI</h2>
        <p class="my-5">Ul. Jefta - Čaja Šćepanovića b.b. Danilovgrad</p>
        <div class="divMap">        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2939.519001147477!2d19.095362115696954!3d42.54427133144033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134dbeadeed2147f%3A0x1b90d5eb8bd5e8a0!2sJefta%20Scepanovica%20Caja%2C%20Montenegro!5e0!3m2!1sen!2s!4v1596472054318!5m2!1sen!2s" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script src="/js/main.js"></script>

    <script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
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
