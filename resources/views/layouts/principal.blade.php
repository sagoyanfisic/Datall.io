<!DOCTYPE HTML>
<html>
<head>
    <title>Datallio</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]-->

    {!! Html::style('css/skel.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style-xlarge.css') !!}
    {!! HTML::script('js/html5shiv.js'); !!}
    {!! HTML::script('js/jquery.min.js'); !!}
    {!! HTML::script('js/skel-layers.min.js'); !!}
    {!! HTML::script('js/init.js'); !!}

</head>
<body class="landing">

<!-- Header -->
<header id="header" class="alt">
    <h1><strong><a href="index.html">Spatial</a></strong> by Templated</h1>
    <nav id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>
</header>
@yield('content')


<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-facebook"></a></li>
            <li><a href="#" class="icon fa-twitter"></a></li>
            <li><a href="#" class="icon fa-google-plus"></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li>
            <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
            <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
        </ul>
    </div>
</footer>

</body>
</html>