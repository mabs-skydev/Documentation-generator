<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Item Name | Documentation by Author Name</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="/documentation/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/documentation/css/stroke.css">
    <link rel="stylesheet" type="text/css" href="/documentation/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/documentation/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/documentation/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="/documentation/css/style.css">

    <link rel="stylesheet" type="text/css" href="/documentation/js/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="/documentation/js/syntax-highlighter/styles/shThemeRDark.css" media="all">

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="/documentation/css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/documentation/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="/documentation/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div class="container">

            @include('artan.documentation.partials._header')

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            @include('artan.documentation.partials._sidebar')
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9">

                    @yield('content')
                    
                    @include('artan.documentation.partials._footer')
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="/documentation/js/jquery.min.js"></script>
    <script src="/documentation/js/bootstrap.min.js"></script>
    <script src="/documentation/js/retina.js"></script>
    <script src="/documentation/js/jquery.fitvids.js"></script>
    <script src="/documentation/js/wow.js"></script>
    <script src="/documentation/js/jquery.prettyPhoto.js"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="/documentation/js/custom.js"></script>
    <script src="/documentation/js/main.js"></script>

    <script src="/documentation/js/syntax-highlighter/scripts/shCore.js"></script>
    <script src="/documentation/js/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="/documentation/js/syntax-highlighter/scripts/shBrushCss.js"></script>
    <script src="/documentation/js/syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script src="/documentation/js/documentation.js"></script>

</body>

</html>