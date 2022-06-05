<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT Exhibition</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet"
        href="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet"
        href="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/landy/1-0/css/landy-iconfont.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- owl carousel-->
    <link rel="stylesheet"
        href="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet"
        href="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/landy/1-0/css/style.default.css"
        id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/landy/1-0/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    @yield('css')
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- navbar-->
    @include('User.layout._navbar')
    <!-- Modal-->
    @yield('body')
    <div id="scrollTop">
        <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    @include('User.layout._footer')
    {{-- <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button"
        class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
        <h4 class="text-uppercase">Select theme colour</h4>
        <form class="mb-3">
            <select name="colour" id="colour" class="form-control">
                <option value="">select colour variant</option>
                <option value="default">blue</option>
                <option value="pink">pink</option>
                <option value="green">green</option>
                <option value="violet">violet</option>
                <option value="red">red</option>
                <option value="sea">sea</option>
            </select>
        </form>
        <p><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/template-mac.png" alt="" class="img-fluid">
        </p>
        <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page
            loads. This will not happen in your production code.</p>
    </div> --}}
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/landy/1-0/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('assetsuser/') }}/js/front.js"></script>
    @yield('js')
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
</body>

</html>
