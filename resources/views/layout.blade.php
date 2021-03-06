<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ config('app.name') }} | Minimalist Ecommerce Bookstore
    </title>
    <link rel='stylesheet' href='/css/woocommerce-layout.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' href='/css/woocommerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
</head>
<body
        @if( isset($isProductPage) )
            class="single single-product woocommerce woocommerce-page"
        @else
            class="home page page-template page-template-template-portfolio page-template-template-portfolio-php"
        @endif
>
<div id="page">
    <div class="container">
        @include('partials.header')
        <!-- #masthead -->
        @yield('content')
        <!-- #content -->
    </div>
    <!-- .container -->
    @include('partials.footer')
    <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='/js/jquery.js'></script>
<script src='/js/plugins.js'></script>
<script src='/js/scripts.js'></script>
<script src='/js/masonry.pkgd.min.js'></script>
</body>
</html>
