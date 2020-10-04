<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords"  content="creative, portfolio, agency, template, theme, designed, html5, html, css3, responsive, onepage" />
    <meta name="author" content="Set Private Limited" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('panels/styles')

    <!-- Favicon -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

  </head>

<body>

    @include('panels/preloader')

    <div class="page-wrapper">

        @include('panels/header')

        @yield('content')

        @include('panels/footer')
    
    </div>

    @include('panels/scripts')

</body>
</html>