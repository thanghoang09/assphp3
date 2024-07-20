<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    <meta charset="utf-8" />
    <title>Reader | Hugo Personal Blog Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- theme meta -->
    <meta name="theme-name" content="reader" />

    <!-- plugins -->
    <link rel="stylesheet" href="/client/plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="/client/plugins/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="/client/plugins/slick/slick.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/client/css/style.css" media="screen" />

    <!--Favicon-->
    <link rel="shortcut icon" href="/client/favicon.png" type="image/x-icon" />
    <link rel="icon" href="/client//client/images/favicon.png" type="image/x-icon" />

    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">

        @include('client.layouts.partials.header')

    </header>
    
    @yield('content')


    <footer class="footer">
        @include('client.layouts.partials.footer')
    </footer>

    <!-- JS Plugins -->
    <script src="/client/plugins/jQuery/jquery.min.js"></script>

    <script src="/client/plugins/bootstrap/bootstrap.min.js"></script>

    <script src="/client/plugins/slick/slick.min.js"></script>

    <script src="/client/plugins/instafeed/instafeed.min.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
</body>

</html>
